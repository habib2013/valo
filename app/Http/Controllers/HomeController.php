<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\UserSchool; 
use App\Models\School; 
use App\Models\User; 
use App\Models\Courses; 
use App\Models\BvnData; 
use App\Models\UserProfile; 
use App\Models\LoanProduct; 
use App\Models\TransactionHistory; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.    
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('home');
    }

    public function loanbook(){
        return view('loan_book.loan_index');
    }

    public function payment(){
        $id = Auth::user()->id;
        
        $auth_user = User::where('id',$id)->first();
        return view('payment.user_payment',compact('auth_user'));
    }

    public function profile(){
        $id = Auth::user()->id;

        $listSchools = School::all();
        $listCourses = Courses::all();
        $auth_user = User::where('id',$id)->first();
        $userProfile = UserProfile::where('id',$id)->first();

        return view('profile.profile_seetings',compact('listSchools','listCourses','userProfile','auth_user'));
    }


    public function updatecontact(Request $request){
         
        $id = Auth::user()->id;

     $isProfileCreated =    UserProfile::updateOrCreate(
        [
                'user_id' => $id,],
                [
                'permanent_address' => $request->permanent_address,
                'state' => $request->state,
                'local_government' => $request->local_government,
        ]);

        $isUserUpdated = User::updateOrCreate(
            [
                'id' => $id,
            ],  
            [
                'bvn' => $request->bvn,
                'title' => $request->title,
                'date_of_birth' => $request->dob,
                'name' => $request->fullname,
               // 'email' => $request->email,
                'phone' => $request->phone,
                'alternate_number' => $request->alternate_number,
                'gender' => $request->gender,
             
            ]
    );

        if($isProfileCreated){
            $kycLevel = Auth::user()->kyc_level;
            $isContactUpdated = Auth::user()->is_contact_updated;
            
            $newKyc = 20 + $kycLevel;
          //  $newKyc += $kycLevel;

          if(!$isContactUpdated){

            User::where('id',$id)->update(
                [
                    'id' => $id,
                    'kyc_level' => $newKyc,
                    'is_contact_updated' => 1,
                    'is_personalinfo_updated' => 1,
                ]
                );

         
            }
            
            $msg = array(
                'status'  => 'success',
                'message' => 'User Information updated successfully !'
            );
    
            return response()->json($msg );

        }

        else {
            $msg = array(
                'status'  => 'error',
                'message' => 'Error while updating contact information !'
            );
    
            return response()->json($msg );  
        }
        

  
    }


    public function verify_bvn(Request $request){
  $findBvn = User::where('bvn',$request->userbvn)->get();

  if(count($findBvn) !=  0){
    $msg = array(
      'status'  => 'error',
      'data' => 'Bvn already exists',
  );
  
  return response()->json($msg,400); 
  }

  else {
    $bvn = $request->userbvn;
    $findData = BvnData::where('bvn',$bvn)->first();
    
    // if(is_null($findData)){

    // }

    $msg = array(
        'status'  => 'success',
        'data' => $findData,
    );
    
    return response()->json($msg,200); 
    
  }

    }
  
 public function loan_investment(Request $request){
    $loanProduct = LoanProduct::all();
    return view('loan_book.loan_investment',compact('loanProduct'));
 }

 public function addToWallet(Request $request){
  
  //  dd($request->all());
  $reference = $request->reference;
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$reference,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_0071c14fc885c552539f63f63c5f7a63cc7003e9",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    $result = json_decode($response);
    $user_id = Auth::user()->id;
  if($result->data->status == 'success'){
    $getAmount = ($result->data->amount)/100;
        $existingBalance = Auth::user()->wallet_balance;

        $newBalance = $existingBalance + $getAmount;

        $updateWallet  = User::where('id',$user_id)->update(
            [
                'wallet_balance' => $newBalance         
            ]
            );

            if($updateWallet)
            {
                
                TransactionHistory::create([
                    'user_id' => $user_id,
                    'title' => 'Wallet Creditted',
                    'description' => 'Wallet has been successfully credited with '.$getAmount . ' Naira',
                    'amount' =>  $getAmount,
                ]);

                $msg = array(
                    'status'  => 'success',
                    'message' => 'Fund Added to wallet Successfully !'
                );
    
                return response()->json($msg );
            }
             else 
             {
                $msg = array(
                    'status'  => 'error',
                    'message' => 'Error while funding wallet '
                );
     
                return response()->json($msg );   
            }
  }
  
  }

 }

}

<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\LoanInvestor; 
use App\Models\School; 
use App\Models\User; 
use App\Models\Courses; 
use App\Models\BvnData; 
use App\Models\UserProfile; 
use App\Models\LoanProduct; 
use App\Models\LoanAcceptance; 
use App\Models\TransactionHistory; 
use App\Models\AdminWalletVault; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


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

    public function admin_home(Request $request)
    {
        return view('admin.adminhome');
    }

    public function addLoan(Request $request){
        $input = $request->all();

        $loan_created =  LoanProduct::create($input);
 
        if($loan_created){
         $msg = array(
             'status'  => 'success',
             'message' => 'Loan Product Added Successfully',
             // 'username' => $username,
         );
 
         return response()->json($msg);
        } else {
         $msg = array(
             'status'  => 'error',
             'message' => 'Failed',
             // 'username' => $username,
         );
 
         return response()->json($msg);
        }
    }
    

    public function addSchool(Request $request){
        $input = $request->all();

       $school_created =  School::create($input);

       if($school_created){
        $msg = array(
            'status'  => 'success',
            'message' => 'School Added Successfully',
            // 'username' => $username,
        );

        return response()->json($msg);
       } else {
        $msg = array(
            'status'  => 'error',
            'message' => 'Failed',
            // 'username' => $username,
        );

        return response()->json($msg);
       }

    }

    public function allusers(Request $request){
        $allUsers = User::all();
      //  dd($allUsers);
        $id = Auth::user()->id;
        $auth_user = User::where('id',$id)->first();
        return view('admin.admin_users',compact('allUsers','auth_user'));
    }
    
    public function allschools(Request $request){
        $allUsers = School::all();
      //  dd($allUsers);
        $id = Auth::user()->id;
        $auth_user = User::where('id',$id)->first();
        return view('admin.admin_schools',compact('allUsers','auth_user'));
    }

    public function allloans(Request $request){
        $allProducts = LoanProduct::all();
      //  dd($allUsers);
        $id = Auth::user()->id;
        $auth_user = User::where('id',$id)->first();
        return view('admin.admin_loans',compact('allProducts','auth_user'));
    }

    


    public function addschools(Request $request){
        $allUsers = User::all();
      //  dd($allUsers);
        $id = Auth::user()->id;
        $auth_user = User::where('id',$id)->first();
        return view('admin.add_school',compact('allUsers','auth_user'));
    }
    
    public function addloans(Request $request){
        $allUsers = User::all();
      //  dd($allUsers);
        $id = Auth::user()->id;
        $auth_user = User::where('id',$id)->first();
        return view('admin.add_loan',compact('allUsers','auth_user'));
    }
    

    
    



    

    
    public function loanbook(){
        return view('loan_book.loan_index');
    }
    public function loanfeed(){
        $id = Auth::user()->id;
        $auth_user = User::where('id',$id)->first();

        $show_loan_available = LoanInvestor::all();

      //  dd($show_loan_available);

      //dd($show_loan_available->investor);

        return view('loan_feed.loan_feed',compact('auth_user','show_loan_available','id'));
    }

    public function viewAllLoans(Request $request,$id){

       $singleInvestorProfile =  LoanInvestor::where('investor_id',$id)->first();

       $showLoan = LoanProduct::where('id',$singleInvestorProfile->loan_id)->get();

      // dd($showLoan);
        return view('loan_book.loan_index',compact('showLoan','id'));
    }

    public function payment(){
        $id = Auth::user()->id;
        $transactionHistory = TransactionHistory::where('user_id',$id)->get();
        $auth_user = User::where('id',$id)->first();
        return view('payment.user_payment',compact('auth_user','transactionHistory'));
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
    $findData = BvnData::where('NIN',$bvn)->first();
    
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


 public function logout()
 {
     Session::flush();
     Auth::logout();
     return redirect('login');
 }


 

 public function iwantthisloan(Request $request){

    $wallet_balance = Auth::user()->wallet_balance;
  //  $investor_id = Auth::user()->id;

    
    // if($wallet_balance < $request->max_investment){

    //     $msg = array(
    //         'status'  => 'error',
    //         'message' => 'Wallet Balance is low,please choose alternate plans '
    //     );
    //     return response()->json($msg );   
    // }
    // else {

       $acceptLoan =  LoanAcceptance::create($request->all());

            if($acceptLoan){
                $user_id = Auth::user()->id;
                $findLoan = LoanProduct::where('id',$request->loan_id)->first();

                $getAmount = $findLoan->max_principal;

                $findAdminVaultAmount = AdminWalletVault::where('loan_pckage',$request->loan_id)->first();

                // sendFundToClient

                $existingBalance = Auth::user()->wallet_balance;

                $newBalance = $existingBalance + $findAdminVaultAmount->amount;
        
                $updateWallet  = User::where('id',$user_id)->update(
                    [
                        'wallet_balance' => $newBalance         
                    ]
                    );

                    AdminWalletVault::where('loan_pckage',$request->loan_id)->update(
                        [
                            'amount' => $findAdminVaultAmount->amount - $getAmount
                        ]
                        );

                        TransactionHistory::create([
                            'user_id' => $user_id,
                            'title' => 'Wallet Creditted',
                            'description' => 'Fund disbursed to your wallet from a loan',
                            'amount' =>  $getAmount,
                        ]);

                    
                           $msg = array(
            'status'  => 'success',
            'message' => 'Loan accepted and credited to your wallet'
        );
        return response()->json($msg );      
        }

        else {
             $msg = array(
            'status'  => 'Error',
            'message' => 'Unable to accept'
        );
        return response()->json($msg );      
        
        }

            }

        // $debitFromWallet = $wallet_balance - $request->max_investment;

        //  User::where('id',$investor_id)->update(
        //     [
        //         'wallet_balance' => $debitFromWallet         
        //     ]
        //     );


        //     AdminWalletVault::create(
        //         [
        //             'user_id' => $investor_id,
        //             'amount' => $request->max_investment,
        //             'loan_pckage' => $request->loan_package_id,
        //         ]
        //     );

        // $create_package_for_investor = LoanInvestor::create(
        //     [
        //     'investor_id' => $investor_id,
        //     'loan_id' => $request->loan_package_id,
        // ]
    // ); 

        // if($create_package_for_investor){
         
        // $msg = array(
        //     'status'  => 'success',
        //     'message' => 'Plan created successfully, redirecting to your personalised investment dashboard'
        // );
        // return response()->json($msg );      
        // }
    // }
    

  


//  }

 public function investInALoan(Request $request){

    $wallet_balance = Auth::user()->wallet_balance;
    $investor_id = Auth::user()->id;

    
    if($wallet_balance < $request->max_investment){

        $msg = array(
            'status'  => 'error',
            'message' => 'Wallet Balance is low,please choose alternate plans '
        );
        return response()->json($msg );   
    }
    else {

        $debitFromWallet = $wallet_balance - $request->max_investment;

         User::where('id',$investor_id)->update(
            [
                'wallet_balance' => $debitFromWallet         
            ]
            );


            AdminWalletVault::create(
                [
                    'user_id' => $investor_id,
                    'amount' => $request->max_investment,
                    'loan_pckage' => $request->loan_package_id,
                ]
            );

        $create_package_for_investor = LoanInvestor::create(
            [
            'investor_id' => $investor_id,
            'loan_id' => $request->loan_package_id,
        ]
    ); 

        if($create_package_for_investor){
         
        $msg = array(
            'status'  => 'success',
            'message' => 'Plan created successfully, redirecting to your personalised investment dashboard'
        );
        return response()->json($msg );      
        }
    }
    

  


 }


}

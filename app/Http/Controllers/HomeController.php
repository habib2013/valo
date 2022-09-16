<?php

namespace App\Http\Controllers;

use App\Models\UserSchool; 
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
        return view('payment.user_payment');
    }

    public function profile(){
        $listSchools = UserSchool::all();
        return view('profile.profile_seetings',compact('listSchools'));
    }
}

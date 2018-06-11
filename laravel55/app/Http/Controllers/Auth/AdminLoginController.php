<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Auth;
use Session;
class AdminLoginController extends Controller
{
    public function __construct()
    {
       $this->middleware('guest:admin',['except'=>['logout']]); //Admin Middleware is not applay in adminLogout function 
    }

    public function showLoginForm()
    {
              
      return view('auth.admin-login')->with('meta_title','Admin Login');
    }

    public function login(Request $request)
    {

        // There are 4 stype for login 


            // (i) Check Form Validation 

                $this->Validate($request,[

                            'email'=>'required|email',
                            'password'=>'required|min:6'
                       ]);

          //  (ii) Attempt to log the user in 

                  // Auth::guard('admin')->attempt($credentials,$remeber);  or 

          if(Auth::guard('admin')->attempt(['email'=>$request->email,
                                         'password'=>$request->password],
                                          $request->remeber))
          {

          //   (iii) If success then redriect to dashboard
   
                     return redirect()->intended(route('admin.dashboard'));

          }


          //     (iv) If Unsccess then redriect to login form 


       Session::flash('message', 'Invalid credentials');
       
       return redirect()->back()->withInput($request->only('email','remeber'));


       


    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
       // $request->session()->invalidate();
        return redirect('/');
    }

   



 //=================== Don't Touch Under This Line ============   
}

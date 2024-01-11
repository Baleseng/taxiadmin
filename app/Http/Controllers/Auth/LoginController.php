<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function __construct()
    {
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:admin')->except('logout');
            $this->middleware('guest:chairman')->except('logout');
            $this->middleware('guest:owner')->except('logout');
            $this->middleware('guest:marshall')->except('logout');
            $this->middleware('guest:driver')->except('logout');
    }

    /*** 
    * Login Credentials for Admin
    ***/
    public function showAdminLoginForm(){return view('auth.login', ['url' => 'admin']);}
    public function adminLogin(Request $request)
    {

        //$this->validate($request, [
        //  'mobile_no_admin' => 'required|regex:/[0-9]{10}/|digits:10',              
        //]);

        // Get user record
        //$admin = Admin::where('mobile_no_admin', $request->get('mobile_no_admin'))->first();
        // Check Condition Mobile No. Found or Not
        //if($request->get('mobile_no_admin') != $admin->mobile_no_admin) {
        //    \Session::put('errors', 'Please Register First mobile number.!!');
        //    return redirect()->intended('/admin');
        //}  

        $this->validate($request, ['email'   => 'required|email','password' => 'required|min:6']);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    /*** 
    * Login Credentials for Chairman
    ***/

    public function showChairmanLoginForm(){return view('auth.login', ['url' => 'chairman']);}
    public function chairmanLogin(Request $request)
    {
        $this->validate($request, ['email'   => 'required|email','password' => 'required|min:6']);
        if (Auth::guard('chairman')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/chairman');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    /*** 
    * Login Credentials for Owner
    ***/


    public function showOwnerLoginForm(){return view('auth.login', ['url' => 'owner']);}
    public function ownerLogin(Request $request)
    {
        $this->validate($request, ['email'   => 'required|email','password' => 'required|min:6']);
        if (Auth::guard('owner')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/owner');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    /*** 
    * Login Credentials for Marshall
    ***/
    public function showMarshallLoginForm(){return view('auth.login', ['url' => 'marshall']);}
    public function marshallLogin(Request $request)
    {
        $this->validate($request, ['email'   => 'required|email','password' => 'required|min:6']);
        if (Auth::guard('marshall')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/marshall');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    /*** 
    * Login Credentials for Driver
    ***/
    public function showDriverLoginForm(){return view('auth.login', ['url' => 'driver']);}
    public function driverLogin(Request $request)
    {
        $this->validate($request, ['email'   => 'required|email','password' => 'required|min:6']);
        if (Auth::guard('driver')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/driver');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

}
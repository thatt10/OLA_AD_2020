<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{

    public function index()
    {
        return view('login');
    }  

    public function registration()
    {
        return view('registration');
    }
    
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = User::where('email', $request->email)->first();
            if($user->is_teacher()){
            return redirect()->intended('dashboard');
            }
            return redirect()->intended('dash_student');
        }
        return Redirect::to("login")->withSuccess('Opps! You have entered invalid credentials');
    }

    
    public function dashboard()
    {

      if(Auth::check()){
        return view('dashboard');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

    public function dash_student()
    {

      if(Auth::check()){
        return view('dash_student');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

	public function create(array $data)
	{
	  return User::create([
	    'name' => $data['name'],
	    'email' => $data['email'],
	    'password' => Hash::make($data['password'])
	  ]);
	}
	
	public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
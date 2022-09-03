<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
   // Login Function
   public function signin(Request $request)
   {

       $validator = Validator::make($request->all(), [
           'email' => 'required',
           'password' => 'required'
       ]);
       if ($validator->fails()) {
           return redirect('/login')
               ->withErrors($validator)
               ->withInput($request->all());
       }

       if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '1', 'status' => '1'])) {

           return redirect()->intended(route('dashboard'));
       }

       \Session::flash('warning_message', 'These credentials do not match our records.');

       return redirect()->back();
   }

   //Save Users Function
   public function savelogin(Request $request)
   {
       // Validation
       $this->validate($request, [
           'username' => 'required',
           'email' => 'required',
           'password' => 'required|min:4',
           'confirm_password' => 'required|same:password',
       ]);

       // Save Record into user DB
       $user = new User();
       $user->username = $request->input('username');
       $user->email = $request->input('email');
       $user->password = bcrypt($request->input('password'));
       $user->role_id = 1;
       $user->status = 1;
       $user->save();

       Auth::login($user);

       $user = Auth::user();

       \Session::flash('Success_message', 'You have successfully registered');

       return redirect()->route('dashboard');
   }

   // Logout Function
   public function logout()
   {
       $user = Auth::user();

       Auth::logout();
       return redirect()->route('login');
   }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UsersController extends Controller
{
    //
    public function loginIndex(){
        return view('registration.login');
    }
    public function login(Request $request){

     $user=User::where(['email'=>$request->email])->first();
     if (!$user || !Hash::check($request->password,$user->password)) {
       
         return "Username and password is not match";
     }
     else{
         $request->session()->put('user',$user);
         return view('admin.dashboard');
     }
    }
    public function logout(Request $request)
{
    $request->session()->forget('user');
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}
   
}


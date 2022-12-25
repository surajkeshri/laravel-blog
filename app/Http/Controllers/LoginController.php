<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function singUp()
    {
        return view('singUp');
    }
    public function register(Request $request)
    {
        $user=new User();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=md5($request['password']);
        $user->save();
        return redirect('/');
    }
    public function login(Request $request)
    {
        $email=$request['email'];
        $password=$request['password'];
        $user=User::where('email',$email)->where('password',md5($password))->first();
        if(!is_null($user))
        {
            $request->session()->put('user_id',$user['id']);
            return redirect('/dashboard');
        }
        else{
            echo "wrongg user id password";
        }
    }
}

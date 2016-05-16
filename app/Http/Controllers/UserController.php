<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        $this->validate($request,
            [   'email'=>'required|email|unique:users',
                'firstname'=>'required|max:45',
                'password'=>'required|min:4' ]
            );

      $email=$request['email'];
      $firsnamt=$request['firstname'];
      $password=bcrypt($request['password']);
      $user=new User();
      $user->email=$email;
      $user->firstname=$firsnamt;
      $user->password=$password;
        
      $user->save();

      Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function signin(Request $request)
    {
        $this->validate($request,
            [   'email'=>'required',
                'password'=>'required' ]
        );

        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
         return redirect()->route('dashboard');
     }
        return redirect()->back();
    }
   

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterPostRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthController extends Controller
{
    public function registerIndex(){
        $role=Role::all();
       
        return view('register',compact('role'));
    }


    public function registerPost(RegisterPostRequest $request){

       
        $user=User::create($request->validated());
        $user->syncRoles($request->roles);

        return back();
    }

    public function login(){

        return view('login');

    }

    public function loginPost(LoginRequest $request){

        if(!Auth::attempt($request->validated()))
        {
            return back();
        };
        
        return redirect()->intended('home');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

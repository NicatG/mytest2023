<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterPostRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class PasswordReset extends Controller
{
    public function passwordResetIndex()
    {
        return view('passwordResetIndex');
    }

    public function passwordResetPost(Request $request)
    {

        $token=Str::random('60');
        
        DB::table('password_reset_tokens')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>now(),
        ]);
    Mail::send('forget-password',['token'=>$token],function($message) use ($request){
        $message->to($request->email);
        $message->subject('Password Reset');

    });
        
        return redirect()->back()->with('Success','Emaile link gonderildi')->autoClose(5000);
    }

    public function passwordResetToken($token)
    {
        return view('password-reset-post',['token'=>$token]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $r){
        
        $validator = Validator::make($r->all(), [
            'name' => 'required|string|regex:/^([a-яА-ЯёЁ\s-]*)$/u',
            'surname' => 'required|string|regex:/^([a-яА-ЯёЁ\s-]*)$/u',
            'email' => 'required|string|email:rfc|unique:App\Models\User,email|',
            'phonenumber' => 'required|string',
            'password' => 'required|string|min:6|same:password_repeat',
            'password_repeat' => 'required|string|min:6|same:password',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }

        User::create([
            'name'=> $r->name,
            'surname'=> $r->surname,
            'email'=> $r->email,
            'phonenumber'=> $r->phonenumber,
            'password'=>Hash::make($r->password),
            'level'=> 1,
        ]);

        return response()->json(['success' => 'success', 200]);

    }
    public function auth(Request $r){
        $validator = Validator::make($r->all(), [
            'email1' => 'required|string',
            'password1' => 'required|string',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }

        if (Auth::attempt([
            'email' => $r->email1,
            'password' => $r->password1
        ])) {
            if (Auth::user()->admin == 1) {
                return response()->json(['success' => 'admin'], 200);
            } else {
                return response()->json(['success' => 'success'], 200);
            }
            } else {
                return response()->json(['error' => 'error'], 401);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}

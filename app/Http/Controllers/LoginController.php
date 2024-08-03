<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\RegisterMail;
use App\Model\User;

class LoginController extends Controller
{
    public function signUp(Request $request){
        $rules = [
            'name'=>'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'success' => false,
                'errors' => $errors
            ], 422);
        }
        $id=User::insertGetId([
            'role_id'=>2,
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        try{
            \Mail::to($request->email)->queue(new RegisterMail($request->all()));
        }catch(\Exception $e){
            \Log::info($e->getMessage());
        }
        \Auth::loginUsingId($id);
        return $this->loggedIn();
    }
    public function loggedIn(){
        return response()->json(['success'=>true,'message'=>'User Logged in successfully']);
    }
}

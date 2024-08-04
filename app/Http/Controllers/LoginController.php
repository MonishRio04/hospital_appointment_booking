<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\RegisterMail;
use App\Models\User;

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
            'password'=>\Hash::make($request->password),
        ]);
        try{
            \Mail::to($request->email)->queue(new RegisterMail($request->all()));
        }catch(\Exception $e){
            \Log::info($e->getMessage());
        }
        $user=User::find($id);
        \Auth::loginUsingId($id);
        $token=$user->createToken('authToken');
        $data=['message'=>'User Logged in successfully','token'=>$token];
        return response()->json(['success'=>true,'data'=>$data]);
    }
    public function signIn(Request $request){
        $rules = [
            'email' => 'required|email|',
            'password' => 'required|string|min:8',
        ];
        $validator = Validator::make($request->all(), $rules);
        if(\Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user=User::find(\Auth::id());
            $token=$user->createToken('authToken');
            $data=['message'=>'User Logged in successfully','token'=>$token];
            return response()->json(['success'=>true,'message'=>'User Logged in successfully','data'=>$data]);
        }else{
            return response()->json(['success'=>true,'message'=>"User Doesn't Exists"]);
        }
    }
    public function home(){
        return response()->json(['success'=>true,'message'=>'User Logged in successfully','data'=>\Auth::user()]);
    }
    public function signOut(){
        $tokenRepository = new \Laravel\Passport\TokenRepository();
        $tokens = \DB::table('oauth_access_tokens')->where('user_id', \Auth::id())->get();

        foreach ($tokens as $token) {
            $tokenRepository->revokeAccessToken($token->id);
        }
        return response()->json(['success'=>true,'message'=>"User Sign out Successfully"]);
    }
}

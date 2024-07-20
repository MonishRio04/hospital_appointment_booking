<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
class LoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function loginPost(Request $request){
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();
        if (!$user || !\Hash::check($credentials['password'], $user->password)) {
            return back()->with('success','Invalid Login Details');
        }
        \Auth::login($user);
        return view('admin.dashboard');
    }
    public function forgetPassword(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);
        $email=$request->email;
        try{
            $token = \Str::random(64);
            \Mail::send('emails.forgetPassword', ['token' => $token], function($message) use($email){
                $message->to($email);
                $message->subject('Reset Password');
            });
            DB::table('password_resets')->insert([
                'email' => $email,
                'token' => $token,
                'created_at' => date('Y-m-d H:i:s')
              ]);
        }catch(\Exception $e){
            dd($e->getMessage());
            return back()->with('error','Mail Configuration required');
        }
        return back()->with('success', 'We have e-mailed your password reset link!');
    }
    public function resetPassword(string $token){
        return view('admin.forget-password',['token'=>$token]);
    }
    public function changePassword(Request $request){
        $updatePassword = DB::table('password_resets')
                            ->where([
                              'token' => $request->token
                            ])
                            ->first();
        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }
        $user = User::where('email', $request->email)
                    ->update(['password' => \Hash::make($request->password)]);
        DB::table('password_resets')->where(['email'=> $request->email])->delete();
        return redirect()->to('admin/login');
    }
}

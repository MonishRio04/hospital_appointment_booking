<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Bookings;
use App\Mail\BookingMail;
use App\MOdels\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.home');
    }
    public function bookNow(Request $request){
        if(Bookings::where('phone',$request->phone)->where('status','<',3)->exists()){
            return response()->json(['success'=>false,'message'=>'Phone already exists. Try after treatment']);
        }
        $data=[
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'dob'=>$request->dob,
            'category_id'=>$request->category_id,
            'appointment_date'=>$request->appointment_date,
            'message'=>$request->message,
        ];
        Bookings::create($data);
        try{
            if(isset($request->email)){
                Mail::to($request->email)->send(new BookingMail($data));
            }
            $admins_mail=User::where('role_id',1)->pluck('email','id');
            if(count($admins_mail)>0){
                $data['for_admin']=true;
                Mail::to($admins_mail)->send(new BookingMail($data));
            }
        }catch(\Exception $e){
            return response()->json(['success'=>true]);
        }
        return response()->json(['success'=>true]);
    }
}

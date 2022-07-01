<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\Referral;
use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function index( ){
        return view('referal');
    }

    public function ord(Request $request){
        $referal = new Referral;
        $referal->name=$request->name;
        $referal->phone=$request->phone;
        $referal->email=$request->email;
        $referal->device=$request->device;
        $referal->location=$request->location;
        $referal->quantity=$request->quantity;
   
      
       
        if(User::where("phone",$request->code)->exists() ) {

            $ord= User::where("phone",$request->code)->first();
            $referal->user_id = $ord->id;
           
        }
        else{

            $referal->user_id =1;
        }

   
        
        $referal->save();


        $order = new Order;
        $order->location=$request->location;
        $order->device_type=$request->device;
        $order->quantity=$request->quantity;
        $order->user_id =$referal->user_id;
        $order->save();




        return redirect('/elianaconnect')->with('info','Order created successfully!');
    }
}

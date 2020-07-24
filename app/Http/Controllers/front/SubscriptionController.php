<?php

namespace App\Http\Controllers\front;


use App\Http\Controllers\Controller;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubscriptionController extends Controller
{
        public function subscribe(Request $request){
            $data = $request->validate([
                'email' => 'required|email|unique:subscribers',
            ]);
            $data['status']='Subscribed';
            if(Subscriber::create($data)){
                //send confirmation mail to subscriber
                return('subscribed');
            }
        }
}
?>

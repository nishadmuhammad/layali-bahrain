<?php

namespace App\Http\Controllers\front;
use App\Enquiry;
use App\Gcaptcha;
use App\Http\Controllers\Controller;
use App\Mail\EnquiryEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function store(Request $request){
        $resultJson=Gcaptcha::verifyCaptcha( $request->get('recaptcha-response'));
        if ($resultJson->success != true) {
            return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
        if ($resultJson->score >= 0.3) {
            $data = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
                'phone' => 'required',
                'message' => 'nullable'
            ]);
            if (Enquiry::create($data)) {
                Mail::to(env('MAIL_TO'))->send(new EnquiryEmail($data));
                return ('OK');
            }
        }
        else {
            return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
    }
}

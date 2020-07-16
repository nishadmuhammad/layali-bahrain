<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gcaptcha extends Model
{
    public static function verifyCaptcha($key){
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
            'response' => $key,
        ];
        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);
        return $resultJson;


    }
}

<?php
namespace App\Http\Traits;

trait Captcha {
    public function validateCaptcha($captcha)
    {
        $secretAPIkey = env('RECAPTCHA_SECRET_KEY', '');
        // reCAPTCHA response verification
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretAPIkey . '&response=' . $captcha);
        // Decode JSON data
        $response = json_decode($verifyResponse);

        return $response->success;
    }
}
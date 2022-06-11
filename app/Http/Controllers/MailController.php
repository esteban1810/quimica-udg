<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function sendEmail() {
        $details = [
            'title' => 'Correo de usuario',
            'body' => 'Texto a complementar'
        ];

        Mail::to("testweb03384@gmail.com");
    }

    public function sendPersonalEmail($title, $body){
        $details = [
            'title' => $title,
            'body' => $body
            //Nota: Investigar mas atributos de email
        ];

        Mail::to("testweb03384@gmail.com");
    }
}

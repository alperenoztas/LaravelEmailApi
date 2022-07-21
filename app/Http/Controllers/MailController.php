<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){

        $name = 'John Doe';

        Mail::to('example@gmail.com')->send(new SignUp($name));

        return view('welcome');
    }
}

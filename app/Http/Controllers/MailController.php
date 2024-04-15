<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
// use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from Hariprasad',
            'body' => 'Email sending was successful.'
        ];

        Mail::to('ehariprasad3200@gmail.com')->send(new DemoMail($mailData));

        return"Email is sent.";
    }
}

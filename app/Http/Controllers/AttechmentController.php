<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendAttachment;
use Illuminate\Support\Facades\Mail;

class AttechmentController extends Controller
{

    public function sendEmailWithAttachment()
    {
        $title = 'Your title';
        $subject = 'Your Subject';
        $body = 'Your Email Body';
        $attachmentPath = public_path('files/khan.png'); // Change this to the path of your file

        Mail::to('m.khalid39633@gmail.com')->send(new SendAttachment($title,$subject, $body, $attachmentPath));

        // return "Email with attachment has been sent";
        dd('file has been sent');
    }
}

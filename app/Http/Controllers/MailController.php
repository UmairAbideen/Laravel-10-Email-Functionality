<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    // 1. Send basic email with subject and message text
    public function mail1()
    {
        // Email data (title as subject, body as message, email as recipient)
        $data = [
            'title' => "mail from m.khalid",
            'body' => "testing mail",
            'email' => "muhammad.umair@medzntech.com"
        ];

        // Sending the email using Laravel's Mail::send method
        // This tells Laravel to use the message.blade.php view and pass the $data to it for rendering the email body.
        Mail::send('message', $data, function ($message) use ($data) {
            $message->to($data['email']);                 // Recipient email
            $message->subject($data['title']);            // Subject line
        });

        dd("email has been sent"); // Stops execution and shows message
    }


    // ✅ 2. Send email with attached PDF file
    public function mail2()
    {
        $data = [
            'title' => "mail from m.khalid",
            'body' => "testing mail",
            'email' => "muhammad.umair@medzntech.com"
        ];

        // Load Blade view as PDF using dompdf wrapper
        $pdf = Pdf::loadView('message', $data);

        Mail::send('message', $data, function ($message) use ($data, $pdf) {
            $message->to($data['email']);                 // Recipient email
            $message->subject($data['title']);            // Subject
            $message->attachData($pdf->output(), 'test.pdf'); // Attach PDF file
        });

        dd("email has been sent");
    }


    // ✅ 3. Send email from user input (form) without attachment
    public function mail3(Request $request)
    {
        // Validate form input
        $request->validate([
            'subject' => 'required',
            'body' => 'required',
            'email' => 'required',
        ]);

        // Prepare data from user input
        $data = [
            'title' => $request->subject,
            'body' => $request->body,
            'email' => $request->email,
        ];

        // Mail::send() with user input values
        Mail::send('message', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['title']);
        });

        dd("email has been sent");
    }


    // ✅ 4. Send email from user input (form) with PDF attachment
    public function mail4(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'subject' => 'required',
            'body' => 'required',
            'email' => 'required',
        ]);

        // Store form values into array
        $data = [
            'title' => $request->subject,
            'body' => $request->body,
            'email' => $request->email,
        ];

        // Generate PDF from Blade view using form input
        $pdf = Pdf::loadView('message', $data);

        // Send email with PDF attachment
        Mail::send('message', $data, function ($message) use ($data, $pdf) {
            $message->to($data['email']);
            $message->subject($data['title']);
            $message->attachData($pdf->output(), 'test.pdf');
        });

        dd("email has been sent");
    }
}

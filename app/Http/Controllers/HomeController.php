<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendMails;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sendMail()

    {

        $data['title'] = "Test it from HDTutu.com";

        Mail::send('emails.email', $data, function($message) {

            $message->to('lisethgutierrez68@gmail.com', 'Receiver Name')

                    ->subject('HDTuto.com Mail');

        });

        dd("Mail Sent successfully");

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}

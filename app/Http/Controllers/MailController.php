<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendMails;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    // public function send()
    // {
    //     $objDemo = new \stdClass();
    //     $objDemo->demo_one = 'Demo One Value';
    //     $objDemo->demo_two = 'Demo Two Value';
    //     $objDemo->sender = 'SenderUserName';
    //     $objDemo->receiver = 'ReceiverUserName';
 
    //     Mail::to("lisethgutierrez@gmail.com")
    //     	->send(new SendMails($objDemo));
    // }
}

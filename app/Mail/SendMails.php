<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMails extends Mailable
{
    use Queueable, SerializesModels;    
    /**
     * The demo object instance.
     *
     * @var Demo
     */
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      // $address = 'liliseth12@gmail.com';
      // $name = 'Liseth'; 
      // $subject = 'Laravel Email';
 
      //   return $this->view('mails.newmail')
      //               ->from($address, $name)
      //               ->subject($subject);
    }
}

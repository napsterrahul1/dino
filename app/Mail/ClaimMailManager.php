<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClaimMailManager extends Mailable
{
    use Queueable, SerializesModels;
    public $content;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content,$key)
    {
        $this->content = $content;
        $this->key = $key;
        $this->type = $content['type'];
        // $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         $subject = "New ".$this->type." Request ".$this->key. " Received";
        return $this->markdown('emails.claimmailmanager')
          ->subject($subject)
        ->with('content', $this->content);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClaimMailNotsettled extends Mailable
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
        // $this->type = $content['type'];
        $this->status = $content['status'];
        // $this->attachment = $content['attachment'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // MGBSICICI-BANK-UPI_QR-CODE.pdf
         $subject = ucfirst("Advance Request ".$this->key. " not ".$this->status);
        
            return $this->markdown('emails.claimmailnotsettled')
            ->subject($subject)
          ->with('content', $this->content);

    }
}

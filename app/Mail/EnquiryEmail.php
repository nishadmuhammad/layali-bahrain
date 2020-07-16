<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $enquiry;
    public function __construct($enquiry)
    {
        $this->enquiry=$enquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->enquiry);
        $from=$this->enquiry['email'];
        //dd($from);
        return $this->replyTo($from)
            ->subject($this->enquiry['name'].' | Enquiry')
            ->markdown('front.emails.enquiry-mail')
            ->with('enquiry', $this->enquiry);
    }
}

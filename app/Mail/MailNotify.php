<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade as PDF;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $detail;

    /**
     * Create a new message instance
     *
     * @return void
     */
    public function __construct($detail, $order)
    {
        $this->order = $order;
        $this->detail = $detail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $data = ['detail'=>$this->detail, 'order'=>$this->order];
        $pdf = PDF::loadView('front-end.page.invoice', $data);
        // dd($data);
        return $this->from('quynb201@gmail.com', 'Quy_Vjp_pr0_n01')->subject('Cảm ơn đã mua hàng !!')->markdown('front-end.page.invoice')->attachData($pdf->output(), "invoice.pdf");;
    }
}

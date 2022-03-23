<?php

namespace App\Notifications;

use Illuminate\Support\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class InvoiceNotification extends Notification
{
    use Queueable;
    private $invoiceDetails;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($invoiceDetails)
    {
        $this->invoiceDetails = $invoiceDetails;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $invoiceDetails = $this->invoiceDetails;
        return (new MailMessage)
            ->subject('New invoice from Spacebar Beach Resort')
            ->replyTo('spacebar.pacheco@yahoo.com')
            ->view('vendor.notifications.invoice', compact('invoiceDetails'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

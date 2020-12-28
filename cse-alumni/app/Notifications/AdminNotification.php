<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminNotification extends Notification
{
    use Queueable;
    public $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user=$user;
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
            $url = url('/admin/registeruser/'.$this->user->id);
        return (new MailMessage)
                    ->greeting('Hello,Admin')
                    ->subject('New Registration Created')
                    ->line('New Registration Created From:')
                    ->line('Roll: '.$this->user->roll)
                    ->line('Name: '.$this->user->name)
                    ->line('Batch: '.$this->user->batch)
                    ->line('Contact: '.$this->user->phonenumber)
                    ->line('email: '.$this->user->email)
                     ->line('Click  the approve button to approve')
                    ->action('approve',$url)
                    ->line('');

                 



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

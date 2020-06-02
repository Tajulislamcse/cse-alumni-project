<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class JobChange extends Notification implements ShouldQueue
{
    use Queueable;
    public $alumni;
    public $old;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($alumni,$old)
    {
        $this->alumni=$alumni;
        $this->old=$old;
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
        return (new MailMessage)
                     ->greeting('Hello,'.$notifiable->name)
                    ->line($this->alumni->name.'('.$this->alumni->batch.')'.' changed his job.')
                    ->line('New Job:'.$this->alumni->profession)
                    ->line('Old Job:'.$this->old);
                    
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

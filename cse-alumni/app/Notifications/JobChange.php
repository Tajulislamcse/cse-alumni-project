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
    public $name;
    public $batch;
    public $oldJob;
    public $newJob;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($onealumni,$name,$batch,$oldJob,$newJob)
    {
        $this->alumni=$onealumni;
        $this->name=$name;
        $this->batch=$batch;
        $this->oldJob=$oldJob;
        $this->newJob=$newJob;
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
                     ->greeting('Hello,'.$this->alumni->name)
                    ->line($this->name.' ('.$this->batch.' batch)'.' changed his job')
                    ->line('New Job: '.$this->newJob)
                    ->line('Old Job: '.$this->oldJob);
                   // ->action('Notification Action', url('/'))
                  //  ->line('Thank you for using our application!');
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

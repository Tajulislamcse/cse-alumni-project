<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
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
    /*
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    /*

    */

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //following segment for a person who changed his job
            'name'=>$this->alumni->name,
            'batch'=>$this->alumni->batch,
            'profession'=>$this->alumni->profession,
            'oldProfession'=>$this->old
            ];
    }
}

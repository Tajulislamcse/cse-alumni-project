<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegistrationApprovalNotification extends Notification
{
    use Queueable;
    public $alumniMember;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($currentAlumni)
    {
        $this->alumniMember=$currentAlumni;
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
            $url = url('/admin/registeruser/'.$this->alumniMember->id);
        return (new MailMessage)
                    ->greeting('Hello,Admin')
                    ->subject('New Registration Created')
                    ->line('New Registration Created From:')
                    ->line('alumniId: '.$this->alumniMember->alumniId)
                    ->line('Name: '.$this->alumniMember->name)
                    ->line('Batch: '.$this->alumniMember->batch)
                    ->line('Contact: '.$this->alumniMember->phoneNo)
                    ->line('email: '.$this->alumniMember->email)
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

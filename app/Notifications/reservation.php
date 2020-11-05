<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class reservation extends Notification
{
    private $reservation;
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($reservation)
    {
        $this->reservation=$reservation;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if($notifiable->type == 'admin'){
            $path = config('app.url').'/reservation';
        }else{
            $path = config('app.url').'/doctorreservation';
        }
        return (new MailMessage)
                    ->line('new reservation is made by'.$this->reservation->name.'in department '.$this->reservation->department_id .'in'.$this->reservation->date)
                    ->action('Notification Action',$path )
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        if($notifiable->type == 'admin'){
            $path = config('app.url').'/reservation';
        }else{
            $path = config('app.url').'/doctorreservation';
        }
        return [
            'data'=>'new reservation is made by'.$this->reservation->name.'in department '.$this->reservation->department_id .'in'.$this->reservation->date
                ,'link'=>$path
        ];
    }

}

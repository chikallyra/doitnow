<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MissionRejectedNotification extends Notification
{
    use Queueable;

    private $rejectionReason;
    private $missionTitle;

    public function __construct($rejectionReason, $missionTitle)
    {
        $this->rejectionReason = $rejectionReason;
        $this->missionTitle = $missionTitle;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Mission Rejected: ' . $this->missionTitle)
            ->line('Your mission has been rejected.')
            ->line('Reason: ' . $this->rejectionReason)
            ->line('Please re-submit your mission!');
    }

    public function toArray($notifiable)
    {
        return [
            'title' => 'Mission Rejected: ' . $this->missionTitle,
            'message' => 'Your mission has been rejected. Reason: ' . $this->rejectionReason,
        ];
    }
}

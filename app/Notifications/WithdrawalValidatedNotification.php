<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WithdrawalValidatedNotification extends Notification
{
    use Queueable;

    protected $withdrawal;
    protected $rewardAmount;

    public function __construct($withdrawal, $rewardAmount)
    {
        $this->withdrawal = $withdrawal;
        $this->rewardAmount = $rewardAmount;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'title' => 'Withdrawal Validated',
            'message' => 'Your withdrawal request of Rp' . number_format($this->rewardAmount, 2, ',', '.') . ' has been validated.',
            'reward' => $this->rewardAmount
        ];
    }
}

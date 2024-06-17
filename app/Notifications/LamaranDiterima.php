<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LamaranDiterima extends Notification
{
    use Queueable;

    protected $lamaran;

    /**
     * Create a new notification instance.
     */
    public function __construct($lamaran)
    {
        $this->lamaran = $lamaran;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('Ada lamaran baru untuk pekerjaan yang Anda posting.')
            ->action('Lihat Lamaran', url('/dashboard/show-lamaran/' . $this->lamaran->id))
            ->line('Terima kasih telah menggunakan aplikasi kami!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'lamaran_id' => $this->lamaran->id,
            'nama_pelamar' => $this->lamaran->nama_lengkap,
            'posting_id' => $this->lamaran->posting_id,
        ];
    }
}

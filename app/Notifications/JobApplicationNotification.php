<?php


namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Illuminate\Notifications\Notification;
use App\Models\UserProfile;

class JobApplicationNotification extends Notification
{
    use Queueable;

    protected $applicantName;
    protected $jobTitle;

    protected $applicantPhoto;
    protected $jobId ;
    public function __construct($applicantName, $jobTitle , $jobId , $applicantPhoto)
    {
        $this->applicantName = $applicantName;
        $this->jobTitle = $jobTitle;
        $this->jobId = $jobId;
        $this->applicantPhoto = $applicantPhoto;
    }

    public function via($notifiable)
    {
        return ['database']; // Usamos solo la base de datos para las notificaciones
    }

    public function toDatabase($notifiable)
    {
        return [
            'job_id' => $this->jobId,
            'applicant_name' => $this->applicantName,
            'job_title' => $this->jobTitle,
            'message' => "{$this->applicantName} se ha postulado para el trabajo '{$this->jobTitle}'",
            'picture' => UserProfile::find($this->applicantPhoto),

            'created_at' => now(),

        ];
    }
}



<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\DatabaseMessage;
use App\Models\Message;

class NewMessageNotification extends Notification
{
    protected $message;

    // Constructor para recibir el mensaje
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    // El método que define cómo se va a enviar la notificación
    public function via($notifiable)
    {
        return ['database']; // Guardamos la notificación en la base de datos
    }

    // El contenido de la notificación
    public function toDatabase($notifiable)
    {
        return [
            'type' => 'message',
            'sender_id' => $this->message->sender_id,
            'message' => $this->message->message,
            'sender_name' => $this->message->sender->name,
            'message_id' => $this->message->id,
            'created_at' => $this->message->created_at,
        ];
    }
}

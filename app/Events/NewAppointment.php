<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewAppointment implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    public $message;
    public $patient_id;
    public $doctor_id;
    public function __construct($message, $patient_id, $doctor_id)
    {
        //
        $this->message = $message;
        $this->patient_id = $patient_id;
        $this->doctor_id = $doctor_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['appointment-'.$this->doctor_id];
    }

    public function broadcastAs()
    {
        return 'my-event';
    }
}

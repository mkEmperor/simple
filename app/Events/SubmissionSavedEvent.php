<?php

namespace App\Events;

use App\Models\Submission;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SubmissionSavedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @param Submission $submission
     * @return void
     */
    public function __construct(
        public Submission $submission,
    ) {}
}

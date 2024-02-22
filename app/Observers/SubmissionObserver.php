<?php

namespace App\Observers;

use App\Events\SubmissionSavedEvent;
use App\Models\Submission;

class SubmissionObserver
{
    /**
     * Handle the Submission "created" event.
     *
     * @param Submission $submission
     * @return void
     */
    public function created(Submission $submission): void
    {
        SubmissionSavedEvent::dispatch($submission);
    }
}

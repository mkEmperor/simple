<?php

namespace App\Listeners;

use App\Events\SubmissionSavedEvent;
use Illuminate\Support\Facades\Log;

class SubmissionSavedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param SubmissionSavedEvent $event
     * @return void
     */
    public function handle(SubmissionSavedEvent $event): void
    {
        Log::info('submission saved', ['name' => $event->submission->name, 'email' => $event->submission->email]);
    }
}

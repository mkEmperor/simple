<?php

namespace App\Jobs;

use App\Http\Dto\SubmissionCreateDto;
use App\Models\Submission;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SubmissionCreateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     */
    public function __construct(
        public SubmissionCreateDto $request,
    ) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Submission::create([
            'name' => $this->request->getName(),
            'email' => $this->request->getEmail(),
            'message' => $this->request->getMessage(),
        ]);
    }
}

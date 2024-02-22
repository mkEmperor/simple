<?php

namespace App\Repositories;

use App\Http\Dto\SubmissionCreateDto;
use App\Jobs\SubmissionCreateJob;

class SubmissionRepository
{
    /**
     * Add submission
     *
     * @param SubmissionCreateDto $request
     * @return array
     */
    public function create(SubmissionCreateDto $request): array
    {
        SubmissionCreateJob::dispatch($request);

        return [];
    }
}

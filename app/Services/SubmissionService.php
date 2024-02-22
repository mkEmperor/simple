<?php

namespace App\Services;

use App\Http\Dto\SubmissionCreateDto;
use App\Repositories\SubmissionRepository;

final class SubmissionService
{
    /**
     * @var SubmissionRepository
     */
    protected SubmissionRepository $repository;

    public function __construct(SubmissionRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Add submission
     *
     * @param SubmissionCreateDto $request
     * @return array
     */
    public function create(SubmissionCreateDto $request): array
    {
        return $this->repository->create($request);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmissionCreateRequest;
use App\Services\SubmissionService;
use Illuminate\Http\JsonResponse;

class SubmissionController extends BaseController
{
    /**
     * @var SubmissionService
     */
    protected SubmissionService $service;

    public function __construct(SubmissionService $service)
    {
        $this->service = $service;
    }

    /**
     * Add submission
     *
     * @param SubmissionCreateRequest $request
     * @return JsonResponse
     */
    public function store(SubmissionCreateRequest $request): JsonResponse
    {
        $result = $this->service->create($request->getDto());

        return $this->sendResponse($result);
    }
}

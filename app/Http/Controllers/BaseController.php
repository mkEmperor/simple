<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class BaseController extends Controller
{
    /**
     * Success response
     *
     * @param array $result
     * @param string $message
     * @return JsonResponse
     */
    public function sendResponse(array $result = [], string $message = ''): JsonResponse
    {
        if (!empty($result['errors'])) {
            return $this->sendError($result['errors']);
        }

        return response()->json([
            'success' => true,
            'result'  => $result,
            'message' => $message,
        ]);
    }

    /**
     * Error response
     *
     * @param array $result
     * @param string $message
     * @param int $code
     * @return JsonResponse
     */
    public function sendError(array $result = [], string $message = '', int $code = 404): JsonResponse
    {
        return response()->json([
            'success' => false,
            'errors'  => $result,
            'message' => $message,
        ], $code);
    }
}

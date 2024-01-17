<?php

if (!function_exists('apiResponse')) {
    /**
     * Defined in ApiHelper
    */
    function apiResponse(int $status, $data = null, $message = null, $error = null)
    {
        $response = [
            'status' => $status,
            'message' => $message,
            'error' => $error,
            'data' => $data
        ];
        return response()->json($response);
    }
}

<?php

namespace App\Traits;

trait ApiResponser
{
    /**
     * @param $data
     * @param $message
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function successResponse($data, $message = null, $code = 200)
	{
        return response()->json([
            'signal' => 1,
            'message'=> 'SUCCESS',
            'code' => $code,
            'errorMessage' => $message,
            'data' => $data
        ]);
	}

    /**
     * @param $message
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
	protected function errorResponse($message = null, $code)
	{
        return response()->json([
            'signal' => 0,
            'message'=> 'ERROR',
            'code' => $code,
            'errorMessage' => $message,
            'data' => null
        ]);
	}

}

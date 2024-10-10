<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Login Controller
|--------------------------------------------------------------------------
*/

class LoginController extends Controller
{
    /**
     * LoginController constructor.
     */
    public function __construct(private LoginController $login)
    {
    }

    public function login(Request $request): JsonResponse
    {
        Log::info($request->all());

        return new JsonResponse(
            [
                'data' => [
                    'success' => true,
                    'message' => 'Login successful',
                ],
            ],
            200,
            [],
            200,
        );

        // if ($user) {
        //     return new JsonResponse([
        //         'data' => [
        //             'success' => true,
        //             'message' => 'Login successful',
        //         ],
        //     ]);
        // } else {
        //     return new JsonResponse([
        //         'data' => [
        //             'success' => false,
        //             'message' => 'Login failed',
        //         ],
        //     ]);
        // }
    }
}

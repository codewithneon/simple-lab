<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontFlash = [
        'password_confirmation',
        'current_password',
        'password',
    ];

    protected function unauthenticated($request, AuthenticationException $exception): Response|JsonResponse|RedirectResponse
    {
        if ($this->shouldReturnJson($request, $exception)) {
            return response()->json(['message' => $exception->getMessage()], 401);
        }
        return redirect()->guest($exception->redirectTo() ?? route('access.login.index'));
    }

    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

}

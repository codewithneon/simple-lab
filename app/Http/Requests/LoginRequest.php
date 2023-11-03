<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'password' => 'required',
            'email' => 'required|email|max:200|min:10',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Email is required',
            'mobile.email' => 'Invalid email address',
            'password.required' => 'Password is required',
            'email.max' => 'Email Should be less then 120',
            'email.min' => 'Email Should be getter then 12',
        ];
    }

    /**
     * @throws ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();
        if (!Auth::attempt([
            'status' => 1,
            'email' => $this->get('email'),
            'password' => $this->get('password'),
        ], $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());
            throw ValidationException::withMessages(['error' => 'Unable to Login']);
        }
        RateLimiter::clear($this->throttleKey());
    }

    /**
     * @throws ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }
        event(new Lockout($this));
        $seconds = RateLimiter::availableIn($this->throttleKey());
        throw ValidationException::withMessages([
            'error' => trans('auth.throttle', [
                'minutes' => ceil($seconds / 60),
                'seconds' => $seconds,
            ]),
        ]);
    }

    public function throttleKey(): string
    {
        return Str::lower($this->get('email')) . '|' . $this->ip();
    }
}

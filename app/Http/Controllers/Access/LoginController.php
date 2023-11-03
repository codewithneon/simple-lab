<?php

namespace App\Http\Controllers\Access;

use Illuminate\Contracts\View\View;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\Foundation\Application as ConstApplication;

class LoginController extends Controller
{
    public function index(): View|Application|Factory|ConstApplication
    {
        $props['title'] = 'Sign In';
        return view('access.login', $props);
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        try {
            $request->authenticate();
            $request->session()->regenerate();
            return redirect()->intended(route('account.dashboard'));
        } catch (\Exception $exception) {
            dd($exception);
            return back()->withErrors(['error' => $exception->getMessage()]);
        }
    }
}

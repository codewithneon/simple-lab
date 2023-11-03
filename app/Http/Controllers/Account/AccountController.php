<?php

namespace App\Http\Controllers\Account;

use Illuminate\Contracts\Foundation\Application as ConstApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{

    public function dashboard(Request $request): View|Application|Factory|ConstApplication
    {
        $props['title'] = 'Dashboard';
        return view('account.dashboard', $props);
    }

    public function profile(Request $request): View|Application|Factory|ConstApplication
    {
        $props['title'] = 'My Profile';
        return view('account.profile', $props);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('access.login.index');
    }

}

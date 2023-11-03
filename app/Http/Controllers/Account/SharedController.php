<?php

namespace App\Http\Controllers\Account;

use Illuminate\Contracts\Foundation\Application as ConstApplication;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SharedController extends Controller
{
    public function __invoke(Request $request): View|Application|Factory|ConstApplication
    {
        $props['title'] = 'Shared Items';
        return view('account.shared', $props);
    }
}

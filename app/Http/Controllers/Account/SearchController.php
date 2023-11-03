<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application as ConstApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(): View|Application|Factory|ConstApplication
    {
        $props['title'] = 'Search';
        return view('account.search', $props);
    }
}

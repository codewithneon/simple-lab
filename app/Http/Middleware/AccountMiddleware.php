<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class AccountMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        View::share('menu', collect([
            [
                'serial' => 1,
                'title' => 'Dashboard',
                'icon' => 'fa-dashboard',
                'link' => route('account.dashboard'),
                'active' => Route::is('account.dashboard'),
            ],
            [
                'serial' => 2,
                'title' => 'Search',
                'icon' => 'fa-magnifying-glass',
                'link' => route('account.search'),
                'active' => Route::is('account.search'),
            ],
            [
                'serial' => 3,
                'icon' => 'fa-bell',
                'title' => 'Notification',
                'link' => route('account.notification.index'),
                'active' => Route::is('account.notification.index'),
            ],
            [
                'serial' => 4,
                'icon' => 'fa-file-lines',
                'title' => 'Add New Items',
                'link' => route('account.item.create'),
                'active' => Route::is('account.item.create'),
            ],
            [
                'serial' => 5,
                'icon' => 'fa-folder',
                'title' => 'Listed Items',
                'link' => route('account.item.index'),
                'active' => Route::is('account.item.index'),
            ],
            [
                'serial' => 6,
                'icon' => 'fa-share-nodes',
                'title' => 'Shared Items',
                'link' => route('account.shared'),
                'active' => Route::is('account.shared'),
            ],
            [
                'serial' => 7,
                'icon' => 'fa-retweet',
                'title' => 'Requested Items',
                'link' => route('account.request'),
                'active' => Route::is('account.request'),
            ],
        ])->where('link', '!=', null)->sortBy('serial'));
        View::share('user', $request->user());
        return $next($request);
    }
}

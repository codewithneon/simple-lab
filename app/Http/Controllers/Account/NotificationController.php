<?php

namespace App\Http\Controllers\Account;

use Illuminate\Contracts\Foundation\Application as ConstApplication;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(): View|Application|Factory|ConstApplication
    {
        $props['title'] = 'Item List';
        return view('account.notification.index', $props);
    }

    public function show($id): View|Application|Factory|ConstApplication
    {
        $props['title'] = 'Show Item ' . $id;
        return view('account.notification.show', $props);
    }
}

<?php

namespace App\Http\Controllers\Account;

use Illuminate\Contracts\Foundation\Application as ConstApplication;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(): View|Application|Factory|ConstApplication
    {
        $props['title'] = 'Item List';
        return view('account.item.index', $props);
    }

    public function create(): View|Application|Factory|ConstApplication
    {
        $props['title'] = 'Add Item';
        return view('account.item.create', $props);
    }

    public function store(Request $request)
    {

    }
}

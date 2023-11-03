<?php

namespace App\Http\Controllers\Access;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\Foundation\Application as ConstApplication;

class RecoveryController extends Controller
{
    public function index(): View|Application|Factory|ConstApplication
    {
        $props['title'] = 'Recovery';
        return view('access.recovery', $props);
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
}

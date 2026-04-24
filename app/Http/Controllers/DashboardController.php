<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return Cache::remember('dashboard_stats', 60, function () {
            return [
                'users' => \App\Models\User::count(),
            ];
        });
    }
}

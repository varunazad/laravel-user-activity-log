<?php

use Illuminate\Support\Facades\Route;
use Varunazad\LaravelUserActivityLog\Models\UserActivity;

Route::middleware(['web', 'auth']) // You may add 'admin' middleware or gate
    ->prefix('user-activity-log')
    ->name('user-activity-log.')
    ->group(function () {

    // Show latest activity logs
    Route::get('/', function () {
        $logs = UserActivity::with('user')
            ->latest()
            ->limit(100)
            ->get();

        if (request()->wantsJson()) {
            return response()->json($logs);
        }

        return view('user-activity-log::index', compact('logs'));
    })->name('index');
});

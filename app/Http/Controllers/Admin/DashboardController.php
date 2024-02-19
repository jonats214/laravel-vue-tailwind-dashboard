<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends AdminController
{
    public function index() {
        return Inertia::render('admin/Dashboard', [
            'display_name' => 'Jonathan Bulaong'
        ]);
    }
}

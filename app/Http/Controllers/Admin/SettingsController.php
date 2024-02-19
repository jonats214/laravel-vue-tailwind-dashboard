<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SettingsController extends AdminController
{
    public function index() {
        return Inertia::render('admin/Settings');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SettingsController extends AdminController
{
    public function index() {
        $this->pageTitle = __('Settings');
        $props = $this->getBasePageProps();
        return Inertia::render('admin/Settings', $props);
    }
}

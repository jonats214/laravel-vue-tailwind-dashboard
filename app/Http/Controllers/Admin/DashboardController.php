<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends AdminController
{
    public function index() {
        $this->pageTitle = __('Dashboard');
        $props = $this->getBasePageProps();
        return Inertia::render('admin/Dashboard', $props);
    }
}

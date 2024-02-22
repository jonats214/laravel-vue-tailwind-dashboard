<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected string $pageTitle = '';

    protected function getBasePageProps(): array {
        $props = [
            'sidebarSections' => $this->getSidebarSections(),
            'breadCrumb' => $this->getBreadcrumb(),
            'pageTitle' => $this->pageTitle
        ];
        return $props;
    }

    protected function getBreadcrumb(): array {
        return [
            __('Home') => ''
        ];
    }

    protected function getSidebarSections(): array {
        $section1 = [
            'key' => 'dashboard',
            'title' => '',
            'links' => [
                ['text' => __('Dashboard'), 'href' => '/', 'routename' => '', 'sublinks' => ['text' => __('Subdashboard'), 'href' => '/', 'routename' => '']],
                ['text' => __('Dashboard 2'), 'href' => '/', 'routename' => '', 'sublinks' => ['text' => __('Subdashboard2'), 'href' => '/', 'routename' => '']],
                ['text' => __('Dashboard 3'), 'href' => '/', 'routename' => '', 'sublinks' => ['text' => __('Subdashboard3'), 'href' => '/', 'routename' => '']]
            ]
        ];
        $section2 = [
            'key' => 'settings',
            'title' => 'Settings',
            'links' => [
                ['text' => __('Settings'), 'href' => '/', 'routename' => '', 'sublinks' => ['text' => __('Subsettings'), 'href' => '/', 'routename' => '']],
                ['text' => __('Settings 2'), 'href' => '/', 'routename' => '', 'sublinks' => ['text' => __('Subsettings2'), 'href' => '/', 'routename' => '']],
                ['text' => __('Settings 3'), 'href' => '/', 'routename' => '', 'sublinks' => ['text' => __('Subsettings3'), 'href' => '/', 'routename' => '']]
            ]
        ];
        $section3 = [
            'key' => 'marketing',
            'title' => 'Marketing',
            'links' => [
                ['text' => __('Marketing'), 'href' => '/', 'routename' => '', 'sublinks' => ['text' => __('SubMarketing'), 'href' => '/', 'routename' => '']],
                ['text' => __('Marketing 2'), 'href' => '/', 'routename' => '', 'sublinks' => ['text' => __('SubMarketing'), 'href' => '/', 'routename' => '']],
                ['text' => __('Marketing 3'), 'href' => '/', 'routename' => '', 'sublinks' => ['text' => __('SubMarketing'), 'href' => '/', 'routename' => '']]
            ]
        ];
        $section4 = [
            'key' => 'accounts',
            'title' => 'Accounts',
            'links' => [
                ['text' => __('Accounts'), 'href' => '/', 'routename' => '', 'sublinks' => ['text' => __('Subaccounts'), 'href' => '/', 'routename' => '']],
                ['text' => __('Accounts 2'), 'href' => '/', 'routename' => '', 'sublinks' => ['text' => __('Subaccounts2'), 'href' => '/', 'routename' => '']],
                ['text' => __('Accounts 3'), 'href' => '/', 'routename' => '', 'sublinks' => ['text' => __('Subaccounts3'), 'href' => '/', 'routename' => '']]
            ]
        ];
        return [$section1, $section2, $section3, $section4];
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use App\Models\ModelDashboard;

class Dashboard extends BaseController
{
    // public function __construct()
    // {
    //     $this->ModelDashboard = new ModelDashboard();
    // }

    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'subjudul' => 'Dashboard',
            'menu' => 'dashboard',
            'submenu' => '',
            'page' => 'dashboard/dashboard',

        ];
        return view('template/template', $data);
    }
}

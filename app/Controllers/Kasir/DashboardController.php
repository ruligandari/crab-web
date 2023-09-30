<?php

namespace App\Controllers\Kasir;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];

        return view('Kasir/dashboard/index', $data);
    }
}

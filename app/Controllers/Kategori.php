<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kategori extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Data Penjualan',
            'subjudul' => 'Kategori',
            'menu' => 'datapenjualan',
            'submenu' => 'kategori',
            'page' => 'kategori/kategori'
        ];
        return view('template/template', $data);
    }
}

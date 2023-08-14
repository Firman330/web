<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Produk extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Data Penjualan',
            'subjudul' => 'Produk',
            'menu' => 'datapenjualan',
            'submenu' => 'produk',
            'page' => 'produk/produk'
        ];
        return view('template/template', $data);
    }
}

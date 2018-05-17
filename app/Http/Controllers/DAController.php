<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DAController extends Controller
{
    public function book()
    {
    	return view('dashboard.admin.admin_book');
    }
    public function pembelian()
    {
    	return view('dashboard.admin.admin_pembelian');
    }
    public function pemesanan()
    {
    	return view('dashboard.admin.admin_pemesanan');
    }
    public function penjualan()
    {
    	return view('dashboard.admin.admin_penjualan');
    }
}

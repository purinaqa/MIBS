<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }
    public function regist()
    {
    	return view('pages.register');
    }
    public function login()
    {
    	return view('pages.login');
    }
    public function detailbuku()
    {
        return view('pages.detail');
    }
    public function cart()
    {
        return view('pages.cart');
    }
    public function checkout()
    {
        return view('pages.checkout');
    }
    public function invoice()
    {
        return view('pages.invoice');
    }
}

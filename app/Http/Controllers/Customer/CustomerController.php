<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function transaksi()
    {
        return view('transaksi.transaksi');
    }
}

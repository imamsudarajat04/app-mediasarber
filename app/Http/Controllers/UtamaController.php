<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Barang;

class UtamaController extends Controller
{
    public function index()
    {
        // $barang = Barang::all()->paginate(15);
        $barang = Barang::simplePaginate(6);
        return view('welcome', ['barang'=>$barang]);
    }

    public function infopemesanan()
    {
        $barang = Barang::all();
        return view('infopemesanan', ['barang'=>$barang]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::simplePaginate(5);
        return view('vbarang', ['barang' => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vformbarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_barang' => 'required',
            'stock' => 'required',
            'harga' => 'required',
            'harga_member' => 'required',
            'keterangan' => 'required|string|between:10,250',
            'foto' => 'required'
        ]);
        
        $barang = new Barang;
        $barang->nama_barang = $request->input('nama_barang');
        $barang->stock = $request->input('stock');
        $barang->harga = $request->input('harga');
        $barang->harga_member = $request->input('harga_member');
        $barang->keterangan = $request->input('keterangan');
        $barang->foto = $request->file('foto')->store("path","public");
        $barang->save();
    //    $tujuan_upload = 'image';
    //    $barang->foto->move($tujuan_upload,$barang->foto->getClientOriginalName());
    //     dd($barang);
        
        return redirect('/viewbarang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('veditbarang', ['barang'=>$barang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $this->validate($request, [
            'nama_barang' => 'required',
            'stock' => 'required',
            'harga' => 'required',
            'harga_member' => 'required',
            'keterangan' => 'required|string|between:10,250'
        ]);

        $barang = Barang::findOrFail($id);
        if($barang->foto != '')
        {
            $barang->nama_barang = $request->input('nama_barang');
            $barang->stock = $request->input('stock');
            $barang->harga = $request->input('harga');
            $barang->harga_member = $request->input('harga_member');
            $barang->keterangan = $request->input('keterangan');
            $barang->save();
        }else{
            $barang->nama_barang = $request->input('nama_barang');
            $barang->stock = $request->input('stock');
            $barang->harga = $request->input('harga');
            $barang->harga_member = $request->input('harga_member');
            $barang->keterangan = $request->input('keterangan');
            $barang->foto = $request->file('foto')->store("path","public");
            $barang->save();
        }

        return redirect('/viewbarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        
        return redirect('/viewbarang');
    }
}

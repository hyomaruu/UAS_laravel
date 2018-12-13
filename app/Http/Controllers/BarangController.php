<?php

namespace App\Http\Controllers;

use App\Gudang;
use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BarangController extends Controller
{
    public function data_barang()
    {
    	$barang = Barang::all();

    	return view('admin.barang.data')->with('barang', $barang);
    }

    public function add_barang()
    {
    	$barang = Barang::all();
    	$gudang = Gudang::all();

    	return view('admin.barang.process.add')->with('gudang', $gudang);
    }

    public function save_barang()
    {
    	$barang = new Barang;
    	$barang->gudangs_id = Input::get('gudangs_id');
    	$barang->nama = Input::get('nama');
    	$barang->berat = Input::get('berat');
    	$barang->save();

    	return redirect(url('admin/barang/data'))->with('barang', $barang);
    }

    public function edit_barang($id)
    {
    	$data['barang'] = Barang::find($id);
        $data['gudang'] = Gudang::all();

    	return view('admin.barang.process.edit')->with($data);
    }

    public function update_barang($id)
    {
    	$barang = Barang::find($id);
    	$barang->gudangs_id = Input::get('gudangs_id');
    	$barang->nama = Input::get('nama');
    	$barang->berat = Input::get('berat');
    	$barang->save();

    	return redirect()->route('data_barang');
    }

    public function delete_barang($id)
    {
    	$barang = Barang::find($id);
    	$barang->delete();

    	return redirect(url('admin/barang/data'))->with('barang', $barang);
    }
}

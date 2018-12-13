<?php

namespace App\Http\Controllers;

use App\Gudang;
use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class GudangController extends Controller
{
    public function data_gudang()
    {
    	$gudang = Gudang::all();

    	return view('admin.gudang.data')->with('gudang', $gudang);
    }

    public function add_gudang()
    {
    	$gudang = Gudang::all();

    	return view('admin.gudang.process.add')->with('gudang', $gudang);
    }

    public function save_gudang()
    {
    	$gudang = new Gudang;
    	$gudang->alamat = Input::get('alamat');
    	$gudang->kapasitas = Input::get('kapasitas');
    	$pic = Input::file('pic');
    	$gudang->pic = $pic->getClientOriginalName();
    	$pic->move(public_path('gudang_img'), $pic->getClientOriginalName());
    	$gudang->save();

    	return redirect(url('admin/gudang/data'))->with('gudang', $gudang);
    }

    public function edit_gudang($id)
    {
    	$gudang = Gudang::find($id);

    	return view('admin.gudang.process.edit')->with('gudang', $gudang);
    }

    public function update_gudang($id)
    {
    	$gudang = Gudang::find($id);
    	$gudang->alamat = Input::get('alamat');
    	$gudang->kapasitas = Input::get('kapasitas');
    	$pic = Input::file('pic');
    	$gudang->pic = $pic->getClientOriginalName();
    	$pic->move(public_path('gudang_img'), $pic->getClientOriginalName());
    	$gudang->save();

    	return redirect()->route('data_gudang');
    }

    public function delete_gudang($id)
    {
    	$gudang = Gudang::find($id);
    	$gudang->delete();

    	return redirect(url('admin/gudang/data'))->with('gudang', $gudang);
    }
}

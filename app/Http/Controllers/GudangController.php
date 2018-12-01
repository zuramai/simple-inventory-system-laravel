<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;
use Session;

class GudangController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
    	$gudang = Gudang::all();
    	return view('Gudang.index',compact('gudang'));
    }

    public function add_gudang(Request $r) {

    	$nama = $r->nama;
    	$alamat = $r->alamat;
    	$kapasitas = $r->kapasitas;


    	// INSERT INTO DATABASE 
    	$gudang = new Gudang;
    	$gudang->nama = $nama;
    	$gudang->alamat = $alamat;
    	$gudang->kapasitas = $kapasitas;
    	$gudang->save();

        Session::flash('success_add',"Sukses menambahkan gudang!");
    	return redirect()->back();
    }

    public function delete($id) {
    	$gudang = Gudang::find($id);
    	$gudang->delete();

    	return redirect()->back();
    }

    public function edit($id) {
    	$gudangs = Gudang::all()->where('id',$id);
    	return view('Gudang.edit',compact('gudangs'));
    }

    public function update(Request $r) {
    	$gudang = Gudang::find($r->id_gudang);
    	$gudang->nama = $r->nama;
    	$gudang->alamat = $r->alamat;
    	$gudang->kapasitas = $r->kapasitas;
    	$gudang->save();

    	return redirect('gudang');
    }

}

<?php


// ORIGINAL MADE BY AHMAD SAUGI
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;
use App\Barang;
use Session;

class BarangController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
    	$barangs = Barang::all();
    	$gudangs = Gudang::all();
    	return view('Barang.index',compact('barangs','gudangs'));
    }

    public function add(Request $r) {
    	$gudang_id = $r->gudang_id;
    	$nama = $r->nama;
    	$berat = $r->berat;

    	$barang = new Barang;
    	$barang->gudang_id = $gudang_id;
    	$barang->nama = $nama;
    	$barang->berat = $berat;
    	$barang->save();

        Session::flash('success_add','Sukses tambah barang!');
    	return redirect()->back();
    }

    public function delete($id) {
    	$barang = Barang::find($id);

    	$barang->delete();
        Session::flash('success_add',"Sukses hapus barang!");
        return redirect()->back();
    }

    public function edit($id) {
        $barangs = Barang::all()->where('id',$id);
        return view('Barang.edit',compact('barangs'));
    }

    public function update(Request $r) {
        $barang = Barang::find($r->id_barang);
        $barang->nama = $r->nama;
        $barang->berat = $r->berat;
        $barang->save();

        Session::flash('success_add',"Sukses ubah barang!");
        return redirect('barang');
    }
}

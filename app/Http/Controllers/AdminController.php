<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use App\Barang;
use DB;
use charts;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view ('Operator/home3');
    }

    public function tambahBarang()
    {
        $barang = Barang::all();
        return view ('Operator/tambahBarang2');
    }

    public function jualBarang()
    {
       
        return view ('Operator/jual_barang');
    }



    public function storeBarang(request $request) {
    	$id = $request->id;
    	$nama_barang = $request->nama_barang;
    	$kategori = $request->kategori;
        $jenis = $request->jenis;
    	$jumlahbarang = $request->jumlahbarang;
    	$harga_masuk = $request->harga_masuk;
    	$harga_keluar = $request->harga_keluar;
    	$tanggal_masuk = $request->tanggal_masuk;
        $tanggal_kadaluarsa = $request->tanggal_kadaluarsa;

    	 $barang = new barang;
    	 if(isset($request['Tambah'])) {
    	 	$barang->create([
    	 		'id' => $id, 'nama_barang' => $nama_barang, 'kategori' => $kategori, 'jenis' => $jenis, 'jumlahbarang' => $jumlahbarang, 'harga_masuk' => $harga_masuk, 'harga_keluar' => $harga_keluar, 'tanggal_masuk' => $tanggal_masuk,'tanggal_kadaluarsa' => $tanggal_kadaluarsa ]);
    	 	return redirect('/tambahBarang2');
    	 }
    	 return $request->all();
    }
}

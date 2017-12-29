<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Superadmin;
use App\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:superadmin');
    }

     public function home2()
    {
        $barang = Barang::all();
        return view('superAdmin.home2', ['barang'=>$barang]);
    }

    public function tampilBarang()
    {
    	$barang = Barang::all();
        return view('superAdmin.tampilBarang2', ['barang'=>$barang]);
    }

    public function editBarang($id)
    {
    	$barang = Barang::find($id);
        return view('superAdmin.editBarang2', ['barang'=>$barang]);
    }

    public function updateBarang(Request $request, $id) {
        if(isset($request['edit'])) {
            $barang = Barang::findOrFail($id);
            $this->validate($request, [
                'nama_barang' => 'required',
                'kategori' => 'required',
                'jenis' => 'required',
                'jumlahbarang' => 'required',
                'harga_masuk' => 'required',
                'harga_keluar' => 'required',
                'tanggal_masuk' => 'required',
                'tanggal_keluar' => '',
                'tanggal_kadaluarsa' => 'required'
            ]);
            $input = $request->all();
            $barang->fill($input)->save();
            return redirect('superadmin/tampilBarang');
        }
    }

    public function hapusBarang($id){
        $barang = barang::find($id);
        $barang->delete();
        return redirect('superadmin/tampilBarang');
    }


    public function tampilAkun()
    {
        $user = User::all();
        return view('superAdmin.tampilAkun2', ['user'=>$user]);
    }

    public function editAkun($id)
    {
        $user = User::find($id);
        return view('superAdmin.editAkun', ['user'=>$user]);
    }

    public function hapusAkun($id){
        $user = User::find($id);
        $user->delete();
        return redirect('superadmin/tampilAkun');
    }

    public function updateAkun(Request $request, $id) {
        if(isset($request['edit'])) {
            $user = User::findOrFail($id);
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
            ]);
            $input = $request->all();
            $user->fill($input)->save();
            return redirect('superadmin/tampilAkun');
            
        }

    }

    public function tambahAkun()
    {
        $user = user::all();
        return view ('superadmin/tambahAkun2');
    }

    public function storeAkun(Request $request) {
        $name = $request->$name;
        $email = $request->email;
        $password = $request->password;

        $user= new User;
        if(isset($request['submit'])) {
            $user->create([
                'name'=>$name,
                'email'=>$email,
                'password'=>$password,
            ]);
            return redirect ('superadmin/tampilAkun');
        }
        return $request->all();
    }
}
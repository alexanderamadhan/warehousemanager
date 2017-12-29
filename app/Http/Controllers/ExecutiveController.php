<?php

namespace App\Http\Controllers;

use App\Executive;
use App\Barang;
use App\User;
use Illuminate\Http\Request;
use Charts;

class ExecutiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:executive');
    }

    
    public function tampilBarang()
    {
    	$barang = Barang::all();
        return view('Executive.tampilBarang2', ['barang'=>$barang]);
    }

    public function tampilAkun()
    {
    	$user = User::all();
        return view('Executive.tampilAkun2', ['user'=>$user]);
    }

    public function index()
    {
        
        return view('Executive.home4');
    }

    public function tampilKeuangan(){

          $chart =  Charts::database(Barang::all(), 'bar', 'highcharts')
    ->title('Stok Barang Berdasarkan Jenis Barang')
    ->elementLabel('')
    ->labels([''])
    ->values([5,10,20])
    ->dimensions(1000,500)
    ->responsive(false)
    ->groupBy('jenis');
        return view('Executive.keuangan', ['chart' => $chart]);
}

}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
	protected $table = 'barang';
    protected $fillable = [
        'nama_barang', 'kategori', 'jenis', 'jumlahbarang', 'harga_masuk', 'harga_keluar', 'tanggal_masuk', 'tanggal_keluar', 'tanggal_kadaluarsa',
    ];

    /*public function kategori() {
    	return $this->belongsTo('App\Barang');
    }

    public function kategori() {
    	return $this->hasMany('App\Barang');
    }*/
}
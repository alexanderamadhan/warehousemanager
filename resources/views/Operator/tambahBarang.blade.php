@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Barang </div>

                <div class="panel-body">
                    <form method="post" action="/warehousemanager/public/home">
                        {{csrf_field()}}
                    <fieldset style="width: 500px; margin: 5px 0 0 140px;">
                        <table>
                            <tr>
                                <td>ID</td>
                                <td>:</td>
                                <td><input type="text" name="id"></td>
                            </tr>

                            <tr>
                                <td>Nama Barang</td>
                                <td>:</td>
                                <td><input type="text" name="nama_barang"></td>
                            </tr>

                            <tr>
                                <td>Kategori</td>
                                <td>:</td>
                                <td><input type="text" name="kategori"></td>
                            </tr>

                            <tr>
                                <td>Jumlah Barang</td>
                                <td>:</td>
                                <td><input type="text" name="jumlahbarang"></ins></td>
                            </tr>
                            <tr>
                                <td>Harga Masuk</td>
                                <td>:</td>
                                <td><input type="text" name="harga_masuk"></td>
                            </tr>
                            <tr>
                                <td>Harga Keluar</td>
                                <td>:</td>
                                <td><input type="text" name="harga_keluar"></ins></td>
                            </tr>
                            
                            <tr>
                                <td>Tanggal Masuk</td>
                                <td>:</td>
                                <td><input type="date" name="tanggal_masuk"></td>

                            </tr>

                            <tr>
                                <td>Tanggal Kadaluarsa</td>
                                <td>:</td>
                                <td><input type="date" name="tanggal_keluar"></td>
                            </tr>
                        </table>
                        <br>
                        <button type="submit" name="Tambah" class="btn btn-primary" onClick="return confirm('Data Berhasil ditambah');" style="margin:5px 0 0 140px;">Add</button>
                    </fieldset>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

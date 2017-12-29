@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-9 ml-sm-auto col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Barang</div>

                <div class="panel-body">
                    <form method="post" action="{{url('/superadmin/editBarang/'.$barang->id)}}">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                    <table border="1">
                        <tr align="center" valign="center">
                            <td>Nama Barang</td>
                            <td>Kategori</td>
                            <td>Jumlah Barang</td>
                            <td>Harga Masuk</td>
                            <td>Harga Keluar</td>
                            <td>Tanggal Masuk</td>
                            <td>Tanggal Keluar</td>
                        </tr>
                        <tr align="center" valign="center">
                            <td><input type="text" name="nama_barang" value="{{$barang->nama_barang}}"></td>
                            <td><input type="text" name="kategori" value="{{$barang->kategori}}"></td>
                            <td><input type="text" name="jumlahbarang" value="{{$barang->jumlahbarang}}"></td>
                            <td><input type="text" name="harga_masuk" value="{{$barang->harga_masuk}}"></td>
                            <td><input type="text" name="harga_keluar" value="{{$barang->harga_keluar}}"></td>
                            <td><input type="date" name="tanggal_masuk" value="{{$barang->tanggal_masuk}}"></td>
                            <td><input type="date" name="tanggal_keluar" value="{{$barang->tanggal_keluar}}"></td>
                        </tr>
                    </table>
                    <br>
                    <div align="right">
                    <button type="submit" name="edit" class="btn btn-primary" align="center" onclick="return confirm;">Edit</button>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

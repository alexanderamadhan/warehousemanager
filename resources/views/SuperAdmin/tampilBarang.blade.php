@extends('SuperAdmin.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tampilan Barang</div>
                <div class="panel-body">
                    <table border="1">
                        <tr align="center" valign="center">
                            <td>No</td>
                            <td>Nama Barang</td>
                            <td>Kategori</td>
                            <td>Jumlah Barang</td>
                            <td>Harga Masuk</td>
                            <td>Harga Keluar</td>
                            <td>Tanggal Masuk</td>
                            <td>Tanggal Keluar</td>
                            <td>Opsi</td>
                        </tr>
                        <?php $no =1;?>
                        @foreach ($barang as $barang)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$barang->nama_barang}}</td>
                            <td>{{$barang->kategori}}</td>
                            <td>{{$barang->jumlahbarang}}</td>
                            <td>{{$barang->harga_masuk}}</td>
                            <td>{{$barang->harga_keluar}}</td>
                            <td>{{$barang->tanggal_masuk}}</td>
                            <td>{{$barang->tanggal_keluar}}</td>
                            <td><a href="{{url('/superadmin/editBarang/'.$barang->id.'/edit')}}" class="btn btn-link" align="right";>Edit</a>
                                <form method="post" action="{{ url('/superadmin/tampilBarang/'.$barang->id) }}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" name="hapus" class="btn btn-link" align="right" onclick="return confirm('Anda yakin akan menghapus data ini?');">Hapus</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
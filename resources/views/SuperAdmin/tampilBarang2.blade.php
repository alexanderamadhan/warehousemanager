@extends('SuperAdmin.layout2')

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <span class="input-group-btn">
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
          <div class="x_title">
            <h2>Barang<small></small></h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <p class="text-muted font-13 m-b-30">
            </p>
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Barang</th>
                  <th>Kategori</th>
                  <th>Jenis</th>
                  <th>Jumlah</th>
                  <th>Harga Masuk</th>
                  <th>Harga Keluar</th>
                  <th>Tanggal Masuk</th>
                   <th>Tanggal Keluar</th>
                  <th>Tanggal Kadaluarsa</th>
                  <th>Opsi</th>
                </tr>
                </tr>
              </thead>
              <tbody>
                <?php $no =1;?>
                @foreach ($barang as $barang)
                <tr>
                            <td>{{$no++}}</td>
                            <td>{{$barang->nama_barang}}</td>
                            <td>{{$barang->kategori}}</td>
                            <td>{{$barang->jenis}}</td>
                            <td>{{$barang->jumlahbarang}}</td>
                            <td>{{$barang->harga_masuk}}</td>
                            <td>{{$barang->harga_keluar}}</td>
                            <td>{{$barang->tanggal_masuk}}</td>
                            <td>{{$barang->tanggal_keluar}}</td>
                            <td>{{$barang->tanggal_kadaluarsa}}</td>

                            <td><a href="{{url('/superadmin/editBarang/'.$barang->id.'/edit')}}" class="btn btn-link" align="right";>Edit</a>
                                <form method="post" action="{{ url('/superadmin/tampilBarang/'.$barang->id) }}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" name="hapus" class="btn btn-link" align="right" onclick="return confirm('Anda yakin akan menghapus data ini?');">Hapus</button>
                            </form>
                            </td>
                        </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
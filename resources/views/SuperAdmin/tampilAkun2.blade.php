@extends('SuperAdmin.layout2')

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
       

      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
             <h2>Tampil Akun</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no =1;?>
                @foreach ($user as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td><a href="{{url('/superadmin/editAkun/'.$user->id.'/edit')}}" class="btn btn-link" align="right";>Edit</a>
                    <form method="post" action="{{ url('/superadmin/tampilAkun/'.$user->id) }}">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      <button type="submit" name="hapus" class="btn btn-link" align="right" onclick="return confirm('Anda yakin akan menghapus data ini?');">Hapus</button>
                    </form>
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
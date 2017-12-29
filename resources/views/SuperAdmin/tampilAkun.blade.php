@extends('SuperAdmin.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tampilan Akun</div>

                <div class="panel-body">
                    <table border="1">
                        <tr align="center" valign="center">
                            <td>ID</td>
                            <td>Nama</td>
                            <td>Email</td>
                            <td>Opsi</td>
                        </tr>
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
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('SuperAdmin.layout2')

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Users <small>Some examples to get you started</small></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Default Example <small>Users</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form method="post" action="{{url('/superadmin/editAkun/'.$user->id)}}">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                    <table border="1">
                        <tr align="center" valign="center">
                            <td>Nama</td>
                            <td>Email</td>
                        </tr>
                        <tr align="center" valign="center">
                            <td><input type="text" name="name" value="{{$user->name}}"></td>
                            <td><input type="email" name="email" value="{{$user->email}}"></td>
                            
                        </tr>
                    </table>
                    <br>
                    <div align="right">
                    <button type="submit" name="edit" class="btn btn-primary" align="center" onclick="return confirm;">Simpan</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
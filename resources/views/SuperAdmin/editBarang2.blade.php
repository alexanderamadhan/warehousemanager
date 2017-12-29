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
            <h2>Barang</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form  class="form-horizontal form-label-left" method="post" action="{{url('/superadmin/editBarang/'.$barang->id)}}">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Barang</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="nama_barang" value="{{$barang->nama_barang}}">
                          <span aria-hidden="true"></span>
                        </div>
                      </div>
                  <!--     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Kategori</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text"  class="form-control" name="kategori" value="{{$barang->kategori}}"></td>
                          <span></span>
                        </div>
                      </div> -->
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Kategori</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                      <select name="kategori" class="form-control" id="kategori" onchange="populate(this.id,'jenis')">
                        <option value="konsumsi"  {{ old('kategori', $barang->kategori) == 'konsumsi' ? 'selected' : '' }}>
                          Konsumsi
                        </option>
                        <option value="elektronik" {{ old('kategori', $barang->kategori) == 'elektronik' ? 'selected' : '' }}>
                          Elektronik
                        </option>
                        <option value="pakaian" {{ old('kategori', $barang->kategori) ==  'pakaian' ?  'selected' : ''}}>
                          Pakaian
                        </option>
                      </select>
                    </div>
                  </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Jenis</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select class="form-control" id="jenis" name="jenis" ></select>
                          
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Jumlah Barang</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="jumlahbarang" value="{{$barang->jumlahbarang}}"></td>
                          <span ></span>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Harga Masuk</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="harga_masuk" value="{{$barang->harga_masuk}}"></td>
                          <span ></span>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Harga Keluar</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="harga_keluar" value="{{$barang->harga_keluar}}"></td>
                          <span ></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" >Tanggal Masuk</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="date" class="form-control" name="tanggal_masuk" value="{{$barang->tanggal_masuk}}"></td>
                          <span class="fa fa-calendar form-control-feedback right" ></span>
                          <span ></span>
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" class="fa-calender">Tanggal Keluar</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="date" class="form-control" name="tanggal_keluar" value="{{$barang->tanggal_keluar}}"></td>
                          <span class="fa fa-calendar form-control-feedback right" ></span>
                        </div>
                      </div>

      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" class="fa-calender">Tanggal Kadaluarsa</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="date" class="form-control" name="tanggal_kadaluarsa" value="{{$barang->tanggal_kadaluarsa}}"></td>
                          <span class="fa fa-calendar form-control-feedback right"></span>
                          <span></span>

                        </div>
                      </div>

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success" name="edit">Submit</button>
                        </div>
                    </div>
                </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script type="text/javascript">

              function populate(kategori, jenis) {
                var kategori = document.getElementById(kategori);
                var jenis = document.getElementById(jenis);
                jenis.innerHTML = "";

                if(kategori.value=="konsumsi") {
                  var optionArray = ["makanan|Makanan", "minuman|Minuman"];
                  $("#tanggal_kadaluarsa").fadeIn();
                } else if(kategori.value=="elektronik"){
                  var optionArray = [ "audio|Audio", "handphone|Handphone", "kamera|Kamera", "laptop|Laptop", "printer|Printer", "tv|TV"];
                  $("#tanggal_kadaluarsa").fadeOut();
                } else {
                  var optionArray = ["topi|Topi", "baju|Baju", "celana|Celana", "sepatu|Sepatu"];
                  $("#tanggal_kadaluarsa").fadeOut();
                }
                for (var option in optionArray) {
                  var pair = optionArray[option].split("|");
                  var newOption = document.createElement("option");
                  newOption.value = pair[0];
                  newOption.innerHTML = pair[1];
                  jenis.options.add(newOption);
                }
              }
</script>
@endsection
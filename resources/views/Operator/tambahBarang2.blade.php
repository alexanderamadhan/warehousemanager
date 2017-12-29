@extends('Operator.layout')

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
        <div class="x_panel">
          <div class="x_title">
            <h2>Tambah Barang</h2>
            
              
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form role="form" class="form-horizontal form-label-left" method="post" action="/warehousemanager/public/home" onsubmit="return cek(this)">
              {{csrf_field()}}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Barang</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="nama_barang">
                          <span aria-hidden="true"></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Kategori</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <select class="form-control" id="kategori" name="kategori" onchange="populate(this.id,'jenis')">
                          <option value="" selected disabled>Pilih Kategori</option>
                          <option value="konsumsi" onchange="showdate(this.checked)">Konsumsi</option>
                          <option value="elektronik">Elektronik</option>
                          <option value="pakaian">Pakaian</option>
                        </select>
                      </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Jenis</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <select class="form-control" id="jenis" name="jenis">
                          <option value="" selected disabled>Pilih Jenis</option>
                        </select>
                      </div>
                      </div>     

        <!--                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Kategori</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="kategori"></td>
                          <span></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Jenis</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="jenis"></td>
                          <span></span>
                        </div>
                      </div> -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Jumlah Barang</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="jumlahbarang"></td>
                          <span ></span>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Harga Masuk</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="harga_masuk"></td>
                          <span ></span>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" class="fa-calender">Tanggal Masuk</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="date" class="form-control" name="tanggal_masuk"></td>
                          <span class="fa fa-calendar form-control-feedback right" ></span>
                          <span ></span>
                        </div>
                      </div>


                      <div class="form-group" id="tanggal_kadaluarsa">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" class="fa-calender">Tanggal Kadaluarsa</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="date" class="form-control" name="tanggal_kadaluarsa"></td>
                          <span class="fa fa-calendar form-control-feedback right" ></span>
                          <span ></span>
                        </div>
                      </div>
                    </table>
                    <tr>
                      <td></td>
                    </tr>
                    <div class="form-group">
                      <div class="col-md-9 col-md-offset-3">
                        <button type="submit" name="Tambah" class="btn btn-primary";>Tambah</button>           
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

function cek(form) {
  if (form.tanggal_masuk.value > form.tanggal_kadaluarsa.value) {
    window.alert("Tanggal Masuk Melebihi Tanggal Kadaluarsa");
    return (false);
  } else {
    window.alert("Sukses di Tambahkan");
    return true;
  }
}
</script>
@endsection
@extends ('executive.layout2')

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
            <h2>Dashboard<small></small></h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <p class="text-muted font-13 m-b-30">
            </p>
            <div class="panel panel-default">
              <div class="panel-heading">Stok Berdasarkan Jenis-jenis Barang </div>
              <div class="panel-body">
                    {!! Charts::styles() !!}


          </head>
          <body>
            <div class="app">
              <center>
                {!! $chart->html() !!}
            </center>
        </div>
        {!! Charts::scripts() !!}
        {!! $chart->script() !!}
      </div>
    </body>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
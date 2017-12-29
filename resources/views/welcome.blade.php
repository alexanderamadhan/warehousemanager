<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WareHouse Manager



        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('whm/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="{{asset('whm/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
      <!-- NProgress -->
      <link href="{{asset('whm/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
      <!-- iCheck -->
      <link href="{{asset('whm/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
      <!-- Datatables -->
      <link href="{{asset('whm/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('whm/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('whm/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('whm/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('whm/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

      <!-- Custom Theme Style -->
      <link href="{{asset('whm/build/css/custom.min.css')}}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #000000;
                color: #1b8ad3;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 99%;
                margin: 0;
                background: url({{asset('image/img1.jpg')}});
            }

            .full-height {
                height: 94%;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                color: #000000;

            }

            .title {
                font-size: 84px;
                color: #000000;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .subcontent {
               color: #000000;
               font-family: bold;
               text-orientation: all;
            }

            .pull-right {
               color: #000000;
               text-align: center;



            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('executive.login') }}">Login Executive</a>
                        <a href="{{ route('superadmin.login') }}">Login SuperAdmin</a>
                        <a href="{{ route('login') }}">Login Admin</a>
                        
                        
                    @endauth 
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    WareHouseManajer
                </div>

                <br>
                <br>
                <br>
                <br>

                <div class="subcontent" >
                    <h3>Sistem Logistik</h3>


                <div class="pull-right">
                  

                 
                </div>
                </div>
            </div>
        </div>

        <footer style="margin-left: 0">

          <div class="pull-right"  style="font-family: bold">
            ©2017 Disconnected 
          </div>
          <div class="clearfix"></div>
        </footer>
    </body>
</html>

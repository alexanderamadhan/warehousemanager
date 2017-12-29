  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap -->
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
    </head>

    <body class="nav-md">
      <div class="container body">
        <div class="main_container">
          <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
              <div class="navbar nav_title" style="border: 0;">
                <a href="/warehousemanager/public/superadmin/home2" class="site_title"><span>Warehouse Manager</span></a>
              </div>

              <div class="clearfix"></div>

            

              

              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i>Menu<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{URL::to('superadmin/tampilBarang') }}">Tampil Barang</i></a></li>
                        <li><a href="{{URL::to('superadmin/tampilAkun') }}">Tampil Akun</a></li>
                        <li><a href="{{URL::to('superadmin/tambahAkun') }}">Tambah Akun</a></li>
                      </ul>
                    </li>
                </div>

                      </ul>
                    </li>                  
                  </ul>
                </div>

              </div>
              <div class="sidebar-footer hidden-small">
                
                
                
              </div>
              <!-- /menu footer buttons -->
            </div>
          </div>

          <!-- top navigation -->
          <div class="top_nav">
            <div class="nav_menu">
              <nav>
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      {{ Auth::user()->name }}
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();"> Logout
                                           </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                          </form>
                       
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
          <!-- /top navigation -->

          <!-- page content -->
          
          <!-- /page content -->
          @yield('content')
          <!-- footer content -->
          <footer>
            <div class="pull-right">
              
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
        </div>
      </div>

      <!-- jQuery -->
      <script src="{{asset('whm/vendors/jquery/dist/jquery.min.js')}}"></script>
      <!-- Bootstrap -->
      <script src="{{asset('whm/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      <!-- FastClick -->
      <script src="{{asset('whm/vendors/fastclick/lib/fastclick.js')}}"></script>
      <!-- NProgress -->
      <script src="{{asset('whm/vendors/nprogress/nprogress.js')}}"></script>
      <!-- iCheck -->
      <script src="{{asset('whm/vendors/iCheck/icheck.min.js')}}"></script>
      <!-- Datatables -->
      <script src="{{asset('whm/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('whm/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
      <script src="{{asset('whm/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
      <script src="{{asset('whm/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
      <script src="{{asset('whm/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
      <script src="{{asset('whm/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
      <script src="{{asset('whm/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
      <script src="{{asset('whm/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
      <script src="{{asset('whm/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
      <script src="{{asset('whm/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
      <script src="{{asset('whm/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
      <script src="{{asset('whm/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
      <script src="{{asset('whm/vendors/jszip/dist/jszip.min.js')}}"></script>
      <script src="{{asset('whm/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
      <script src="{{asset('whm/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

      <!-- Custom Theme Scripts -->
      <script src="{{asset('whm/build/js/custom.min.js')}}"></script>

    </body>
  </html>
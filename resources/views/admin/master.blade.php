<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Ujian Online</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    {{-- <link href="{{asset('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet"> --}}

    <!-- Custom CSS -->
    <link href="{{asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/bootstrap-table.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/datepicker.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    {{-- <link href="{{asset('ven dor/morrisjs/morris.css')}}" rel="stylesheet"> --}}

    <!-- Custom Fonts -->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('js/nicEdit.js')}}"></script>
    <script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>

</head>

<body>
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">UjianOnline</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        <!-- /.dropdown -->
        <li class="dropdown">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    {{auth::user()->name}}
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">



                    <!-- /input-group -->
                </li>
                <li >
                    <a href="{{url('admin')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>


                <li>
                    <a href="{{url('admin/kelola-soal')}}"><i class="fa fa-file fa-fw"></i>Kelola Soal</a>
                </li>

                 <li>
                    <a href="?module=hasilujian"><i class="fa fa-file fa-fw"></i>Hasil Ujian</a>
                </li>

                <li>
                    <a href="?module=pengaturanujian"><i class="fa fa-gear fa-fw"></i>Pengaturan ujian</a>
                </li>

                <li>
                    <a href="?module=panduan"><i class="fa fa-book fa-fw"></i>Panduan</a>
                </li>

                <li>
                    <a href="?module=users"><i class="fa fa-user fa-fw"></i> Daftar User</a>
                </li>


            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

    <div id="wrapper">

        <!-- Navigation -->

              @yield('content')

        <!-- /#page-wrapper -->

    </div>


    <!-- /#wrapper -->

    <!-- jQuery -->


    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->




</body>

</html>

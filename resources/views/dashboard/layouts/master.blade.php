<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ahimê | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" href="{{ asset('storage/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('storage/plugins/datatables/dataTables.bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('storage/plugins/morris/morris.css') }}">
        <link rel="stylesheet" href="{{ asset('storage/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
        <link rel="stylesheet" href="{{ asset('storage/plugins/daterangepicker/daterangepicker-bs3.css') }}">
        <link rel="stylesheet" href="{{ asset('storage/css/default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('storage/css/default.css') }}">

        <link rel="stylesheet" href="{{ asset('storage/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('storage/plugins/iCheck/all.css') }}">
        <link rel="stylesheet" href="{{ asset('storage/css/skins/_all-skins.min.css') }}">

        <link href="{{ asset('storage/css/style.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="skin-blue">
        <div class="wrapper">
            @include('dashboard/layouts/partials.header')
            <div class="content-wrapper" style="background: #ecf0f5">
                @yield('container')
            </div>
        </div>
        @include('dashboard/layouts/partials.footer')
    </div>
        <script src="{{ asset('storage/plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
        <script src="{{ asset('storage/bootstrap/js/bootstrap.min.js')}}"></script>

        <script src="{{ asset('storage/plugins/datatables/jquery.dataTables.js')}}"></script>
        <script src="{{ asset('storage/plugins/datatables/dataTables.bootstrap.js')}}"></script>
        
        <script src="{{ asset('storage/dist/js/app.min.js')}}"></script>
        <script src="{{ asset('storage/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{ asset('storage/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{ asset('storage/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{ asset('storage/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{ asset('storage/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
        <script src="{{ asset('storage/plugins/iCheck/icheck.min.js')}}"></script>
        <script src="{{ asset('storage/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{ asset('storage/plugins/chartjs/Chart.min.js')}}"></script>
        <script src="{{ asset('storage/dist/js/pages/dashboard2.js')}}"></script>
        <script src="{{ asset('storage/dist/js/demo.js')}}"></script>
        
        <script src="{{ asset('storage/plugins/fastclick/fastclick.min.js')}}"></script>


        <script src="{{ asset('storage/dist/js/ahime.js')}}"></script>
    
        <script type="text/javascript">
          $(function () {
            $("#example1").dataTable();
            $('#example2').dataTable({
              "bPaginate": true,
              "bLengthChange": false,
              "bFilter": false,
              "bSort": true,
              "bInfo": true,
              "bAutoWidth": false
            });
          });
        </script>

        @include('flashy::message')
        
    </body>
</html>
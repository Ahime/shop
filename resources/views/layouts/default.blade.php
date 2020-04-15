<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ isset($title) ? $title. ' | ':'' }}Ahime</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="{{ asset('storage/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/default.css') }}">

    <link rel="stylesheet" href="{{ asset('storage/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/plugins/iCheck/all.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/skins/_all-skins.min.css') }}">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('storage/css/style.css') }}" rel="stylesheet" type="text/css" />

</head>
<body class="skin-blue">

    <div class="wrapper">
        
        @include('layouts/partials.header')
        
        <div class="content-wrapper">
            @yield('content')
        </div>
        
    </div>
    @include('layouts/partials.footer')
    <script src="{{ asset('storage/plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
    <script src="{{ asset('storage/bootstrap/js/bootstrap.min.js')}}"></script>
    
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
    <script src="{{ asset('storage/dist/js/ahime.js')}}"></script>
    <script src="{{ asset('storage/plugins/fastclick/fastclick.min.js')}}"></script>
    <script src="{{ asset('storage/dist/js/ahime.js')}}"></script>

    <script type="text/javascript">window.onload = date_heure('date_heure');</script>
    @include('flashy::message')
    
  </body>
</html>
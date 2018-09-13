<head>
    @stack('head_start')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>@yield('title') - @setting('general.company_name')</title>

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins -->
    @if (setting('general.admin_theme', 'skin-green-light') == 'skin-green-light')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/skins/skin-green-light.min.css') }}">
    @else
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/skins/skin-black.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin-black.css?v=' . version('short')) }}">
    @endif
    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('vendor/select2/select2.min.css') }}">
    <!-- App style -->
    <link rel="stylesheet" href="{{ asset('css/app.css?v=' . version('short')) }}">
    <link rel="stylesheet" href="{{ asset('css/akaunting-green.css?v=' . version('short')) }}">

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    @stack('css')

    @stack('stylesheet')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('vendor/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('vendor/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendor/fastclick/fastclick.js') }}"></script>
    <!-- Data Tables -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor/adminlte/js/app.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <!-- Mask Money -->
    <script src="{{ asset('js/jquery/jquery.maskMoney.js') }}"></script>

    <script src="{{ asset('js/app.js?v=' . version('short')) }}"></script>

    <script type="text/javascript">
        <!--
        var url_search = '{{ url("common/search/search") }}';
        //-->
    </script>

    @stack('js')

    @stack('scripts')

    @stack('head_end')
</head>
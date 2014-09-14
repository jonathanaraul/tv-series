<html>
<head>
        {{ HTML::style('admin/css/template/bootstrap.min.css'); }}
        {{ HTML::style('admin/css/template/bootstrap-responsive.min.css'); }}
        {{ HTML::style('admin/css/template/font-awesome.min.css'); }}

</head>
<body>

	@include('helpers.navbar')
     
    @yield('pageContent')
    
        {{ HTML::script('admin/js/template/jquery-ui-1.10.3.custom.min.js'); }}
        {{ HTML::script('admin/js/template/jquery.ui.touch-punch.min.js'); }}
        {{ HTML::script('admin/js/template/jquery.slimscroll.min.js'); }}
        {{ HTML::script('admin/js/template/date-time/bootstrap-datepicker.min.js'); }}
        {{ HTML::script('admin/js/template/fuelux/fuelux.spinner.min.js'); }}
        {{ HTML::script('admin/js/template/jquery.maskedinput.min.js'); }}
        {{ HTML::script('admin/js/template/jquery.gritter.min.js'); }}
        {{ HTML::script('admin/js/template/ace-elements.min.js'); }}
        {{ HTML::script('admin/js/template/ace.min.js'); }}
        {{ HTML::script('admin/js/project/genericals.js'); }}
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/assets')}}/img/favicon.png">
    <title>Clinic Management System kita berkarya</title>
    <link rel="stylesheet" type="text/css" href="{{url('/assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/assets')}}/plugins/feather/feather.css">
    <link rel="stylesheet" href="{{url('/assets')}}/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{url('/assets')}}/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{url('/assets')}}/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="{{url('/assets')}}/plugins/datatables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/assets')}}/css/style.css">
    <script src="{{url('/assets')}}/js/jquery-3.6.1.min.js"></script>
    <script src="{{url('/assets')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/assets')}}/js/jquery.slimscroll.js"></script>
    <script src="{{url('/assets')}}/js/feather.min.js"></script>
    <script src="{{url('/assets')}}/plugins/moment/moment.min.js"></script>
    <script src="{{url('/assets')}}/js/bootstrap-datetimepicker.min.js"></script>
    <script src="{{url('/assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('/assets')}}/plugins/datatables/datatables.min.js"></script>
    <script src="{{url('/assets')}}/js/app.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=aOmOxqaK"></script>
</head>

<body>
<div class="main-wrapper">
    @include('include.header');
    @include('include.sidebar')
    @yield('content')
</div>
</body>
</html>

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
    <div class="header">
        <div class="header-left">
            <a href="index.html" class="logo">
            <img src="{{url('/assets')}}/img/logo.png" width="35" height="35" alt=""> <span>CMS</span>
            </a>
        </div>
    </div>
    <div class="page-wrapper" style="margin-left:0px !important; margin-top:70px !important">
        <div class="content">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                    <div class="dash-widget">
                        <div class="dash-content antrian">
                            <span class="counter-no">Loket 1</span>
                        </div>
                    </div>
                    <div class="dash-widget">
                        <div class="dash-content antrian">
                            <h2><div class="counter-count" id="loket1">-</div></h2>
                        </div>
                    </div>
                    <div class="dash-widget">
                        <div class="dash-content antrian">
                            <h3><span>Nomor Antrian</span></h3>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-8 youtube">
                    <div class="dash-widget">
                        <div class="dash-content">
                            <iframe width="100%" height="380" src="https://www.youtube.com/embed/EqFxFJ54X6A?autoplay=1&loop=1&playlist=EqFxFJ54X6A&rel=0&controls=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
            @foreach($counter as $row)

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                    <div class="dash-widget">
                        <div class="dash-content antrian">
                            <h3>Loket {{$row->no_counter}}</h3>
                            <h2><div class="counter-count-bottom" id="loket{{$row->no_counter}}">-</div></h2>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    setInterval(function() {
    $.get("{{url('api/antrian')}}",function(data){
        if(data.message){
            responsiveVoice.speak(data.message,'Indonesian Female');
        }
        $.each(data.antrian, function(key,value){
            $('#loket'+value.id_counter).html((value.type_antrian==1?'A':'U')+value.no_antrian)
        })
    })
},10000)

</script>
</body>
</html>

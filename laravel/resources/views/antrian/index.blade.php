@extends('templates')
@section('content')
<div class="main-wrapper">
    <div class="header">
        <div class="header-left">
            <a href="index.html" class="logo">
            <img src="{{url('/assets')}}/img/logo.png" width="35" height="35" alt=""> <span>CMS</span>
            </a>
        </div>
    </div>
    <div class="page-wrapper" style="margin-left:0px !important;">
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
                            <h2><div class="counter-count">A001-PG01</div></h2>
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
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                    <div class="dash-widget">
                        <div class="dash-content antrian">
                            <h3>Loket 2</h3>
                            <h2><div class="counter-count-bottom">A002-UM02</div></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                    <div class="dash-widget">
                        <div class="dash-content antrian">
                            <h3>Loket 3</h3>
                            <h2><div class="counter-count-bottom">A012-PA01</div></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                    <div class="dash-widget">
                        <div class="dash-content antrian">
                            <h3>Loket 4</h3>
                            <h2><div class="counter-count-bottom">A010-PG02</div></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
        <div class="audio">
		  	<audio id="in" src="{{url('/assets/audio')}}/in.wav"></audio>
		  	<audio id="out" src="{{url('/assets/audio')}}/out.wav"></audio>
		  	<audio id="suarabel" src="{{url('/assets/audio')}}/Airport_Bell.mp3"></audio>
			<audio id="suarabelnomorurut" src="{{url('/assets/audio')}}/nomor-urut.MP3"></audio>
			<audio id="suarabelsuarabelloket" src="{{url('/assets/audio')}}/konter.MP3"></audio>
			<audio id="belas" src="{{url('/assets/audio')}}/belas.MP3"></audio>
			<audio id="sebelas" src="{{url('/assets/audio')}}/sebelas.MP3"></audio>
			<audio id="puluh" src="{{url('/assets/audio')}}/puluh.MP3"></audio>
			<audio id="sepuluh" src="{{url('/assets/audio')}}/sepuluh.MP3"></audio>
			<audio id="ratus" src="{{url('/assets/audio')}}/ratus.MP3"></audio>
			<audio id="seratus" src="{{url('/assets/audio')}}/seratus.MP3"></audio>
			<audio id="suarabelloket1" src="{{url('/assets/audio')}}/1.MP3"></audio>
			<audio id="suarabelloket2" src="{{url('/assets/audio')}}/2.MP3"></audio>
			<audio id="suarabelloket3" src="{{url('/assets/audio')}}/3.MP3"></audio>
			<audio id="suarabelloket4" src="{{url('/assets/audio')}}/4.MP3"></audio>
			<audio id="suarabelloket5" src="{{url('/assets/audio')}}/5.MP3"></audio>
			<audio id="suarabelloket6" src="{{url('/assets/audio')}}/6.MP3"></audio>
			<audio id="suarabelloket7" src="{{url('/assets/audio')}}/7.MP3"></audio>
			<audio id="suarabelloket8" src="{{url('/assets/audio')}}/8.MP3"></audio>
			<audio id="suarabelloket9" src="{{url('/assets/audio')}}/9.MP3"></audio>
			<audio id="suarabelloket10" src="{{url('/assets/audio')}}/sepuluh.MP3"></audio>
			<audio id="loket" src="{{url('/assets/audio')}}/loket.MP3"></audio>
       	</div>
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

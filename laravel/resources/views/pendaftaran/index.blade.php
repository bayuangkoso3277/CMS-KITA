@extends('templates')
@section('content')
<div class="main-wrapper login-body">
        <div class="container-fluid px-0">
            <div class="row">

                <div class="col-lg-6 login-wrap">
                    <div class="login-sec">
                        <div class="log-img">
                            <img class="img-fluid" src="{{url('/assets')}}/img/login-02.png" alt="Logo">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 login-wrap-bg">
                    <div class="login-wrapper">
                        <div class="loginbox">
                            <div class="login-right">
                                <div class="login-right-wrap">
                                    <div class="account-logo">
                                        <a href="{{url('')}}"><img src="{{url('/assets')}}/img/login-logo.png" alt=""></a>
                                    </div>
                                    <h2>Selamat Datang</h2>
                                    <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                                        <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-bs-toggle="tab">Pasien Lama</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab3" data-bs-toggle="tab">Pasien Baru</a></li>
                                    </ul>
                                    <form action="">
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="solid-rounded-justified-tab1">
                                                <div class="form-group">
                                                    <label>No Pasien<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>No Hp<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-rounded-justified-tab3">
                                                <div class="form-group">
                                                    <label>Nama<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tempat Lahir<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="form-group local-forms cal-icon">
                                                    <label>Tanggal Lahir<span class="login-danger">*</span></label>
                                                    <input class="form-control datetimepicker" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>No Hp</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>No KTP</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group login-btn">
                                            <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

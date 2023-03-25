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
    </body>
</html>

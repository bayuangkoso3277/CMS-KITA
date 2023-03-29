@extends('templates')
@section('content')
<div class="page-wrapper">
    <div class="content">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="departments.html">Loket </a></li>
                        <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        <li class="breadcrumb-item active">Antrian List</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="doctor-list-blk">
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="doctor-widget border-right-bg">
                <div class="doctor-box-icon flex-shrink-0">
                    <img src="assets/img/icons/doctor-dash-01.svg" alt="">
                </div>
                <div class="doctor-content dash-count flex-grow-1">
                    <h4>30</h4>
                    <h5>Waiting</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="doctor-widget border-right-bg">
                <div class="doctor-box-icon flex-shrink-0">
                    <img src="assets/img/icons/doctor-dash-02.svg" alt="">
                </div>
                <div class="doctor-content dash-count flex-grow-1">
                    <h4>20</h4>
                    <h5>Pasien Lama</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="doctor-widget border-right-bg">
                <div class="doctor-box-icon flex-shrink-0">
                    <img src="assets/img/icons/doctor-dash-03.svg" alt="">
                </div>
                <div class="doctor-content dash-count flex-grow-1">
                    <h4>10</h4>
                    <h5>Pasien Baru</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="doctor-widget">
                <div class="doctor-box-icon flex-shrink-0">
                    <img src="assets/img/icons/doctor-dash-04.svg" alt="">
                </div>
                <div class="doctor-content dash-count flex-grow-1">
                    <h4>60</h4>
                    <h5>Total Pasien</h5>
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table show-entire">
                    <div class="card-body">

                        <div class="page-table-header mb-2">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="doctor-table-blk">
                                        <h3>Antrian List</h3>
                                        <div class="doctor-search-blk">
                                            <div class="top-nav-search table-search-blk">
                                                <form>
                                                    <input type="text" class="form-control"
                                                        placeholder="Search here">
                                                    <a class="btn"><img src="{{url('assets')}}/img/icons/search-normal.svg"
                                                            alt=""></a>
                                                </form>
                                            </div>
                                            <div class="add-group">
                                                <a href="javascript:;"
                                                    class="btn btn-primary doctor-refresh ms-2"><img
                                                        src="{{url('assets')}}/img/icons/re-fresh.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive" style="padding:10px">
                            <table class="table border-0 custom-table comman-table datatableloket">
                                <thead>
                                    <tr>
                                        <th>No Urut</th>
                                        <th>No Rekam Medis</th>
                                        <th>Nama </th>
                                        <th>Jenis Kelamin</th>
                                        <th>Pasien</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    var dataTableloket = $('.datatableloket').DataTable({
		bDestroy:true,
		processing:true,
		serverSide:true,
        columns:[
			{data:"no_antrian"},
			{data:"no_rm"},
            {data:"name"},
            {data:"sex"},
            {data:"type"},
            {data:"status"},
            {data:"action"},
		],
        ajax:{
			url:"{{ url('api/getLoketAntrian') }}",
			type:"post",
			dataType:"json",
			data:{
				_token:"{{csrf_token()}}",
			},
			beforeSend:function(){
				$(".datatableloket_processing").html("please wait..");
				$(".datatableloket_processing").css({
					"text-align":"center",
					"color":"blue",
					"font-weight":"bold",
					"font-style" : "italic"
				});
			}
		}
    });
    $(document).on('click','.panggil',function(){
        var data = $(this).data();
        $.ajax({
            url:"{{url('api/updateAntrian')}}",
            type:'post',
            data:{
                _token:"{{csrf_token()}}",
                id:data.id,
                counter:data.counter
            },
            success: function (response) {
                if(response.status==true){
                    dataTableloket.ajax.reload();
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        })
    })
</script>
@endSection

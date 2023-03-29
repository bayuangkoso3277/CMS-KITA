<?php

namespace App\Http\Controllers\Loket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AntrianModel;
use App\Models\CounterModel;
use App\Models\PatientModel;
use App\Helpers\CMSKITA;

class LoketController extends Controller
{
    //
    public function index()
    {
        return view('loket.index');
    }
    public function getLoketAntrian(Request $req){
        $data=AntrianModel::leftJoin('patients as a','a.patient_id','=','antrian.id_pasien')
        ->whereNull('antrian.updated_at');
        $totalData =  count($data->get());
        $list = [];
        foreach($data->get() as $key=>$value){
            $listData['id'] = $value['id'];
            $listData['no_antrian'] = $value['type_antrian'].$value['no_antrian'];
            $listData['no_rm'] = $value['patient_no_rm'];
            $listData['name'] = $value['patient_name'];
            $listData['sex'] = $value['patient_sex']==1?'Laki-Laki':'Perempuan';
            $listData['type'] = $value['type'];
            $listData['status'] = CMSKITA::getStatusAntrian(($value['status']==0&&$value['id_counter']!=null)?1:$value['status']);

            $btnAction = '<a class="dropdown-item" href=""><i class="fa-solid fa-pen-to-square m-r-5"></i>Verifikasi Data</a>';

            $counter = CounterModel::where('status','1')->get();
            foreach($counter as $c=>$cv){
                $btnAction .='<a class="dropdown-item panggil" data-id="'.$value['id'].'" data-counter="'.$cv['no_counter'].'"  href="#"><i class="fa-solid fa-phone m-r-5"></i>Panggil di loket '.$cv['no_counter'].'</a>';
            }
            $listData['action']='
                <div class="dropdown dropdown-action">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        '.$btnAction.'
                    </div>
                </div>';
            array_push($list, $listData);
        }
        $feedback = [
            "draw" => $req->input("draw")?$req->input("draw"):1,
            "query"=>$data->toSql(),
            "recordsTotal"=>$totalData,
            "recordsFiltered" =>$totalData,
            "data"=>$list
        ];

         return json_encode($feedback);
    }
}

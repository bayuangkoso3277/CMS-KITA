<?php

namespace App\Http\Controllers\Antrian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AntrianModel;
use App\Models\CounterModel;
use App\Models\PatientModel;
use App\Helpers\CMSKITA;

class AntrianController extends Controller
{

    public function index(Request $reg)
    {
        if($reg->isMethod('post')){
            $noAntrian = CMSKITA::getNoAntrian($reg->input('norm')!=""?$reg->input('jenis_lama'):$reg->input('jenis'));
            $id="";
            try {
                if($reg->input('norm')!=""){
                    $cekNopasien = PatientModel::where('patient_no_rm',$reg->input('norm'))->first();
                    if($cekNopasien){

                    }
                    $idPasien = $cekNopasien->patient_id;
                }else{
                    $newPasien = new PatientModel();
                    $newPasien->patient_no_rm= CMSKITA::getLastPatient();
                    $newPasien->patient_name=$reg->input('nama');
                    $newPasien->patient_birthplace=$reg->input('tempat_lahir');
                    $newPasien->patient_birthdate=$reg->input('tgl_lahir');
                    $newPasien->patient_phone=$reg->input('no_hp');
                    $newPasien->patient_no_ktp=$reg->input('no_ktp');
                    $newPasien->patient_email=$reg->input('email');
                    $newPasien->save();
                    $idPasien=$newPasien->id;
                }
                $antrian = new AntrianModel();
                $antrian->no_antrian=$noAntrian;
                $antrian->tgl_antrian = date('Y-m-d H:i:s');
                $antrian->status=0;
                $antrian->type_antrian=$reg->input('norm')!=""?$reg->input('jenis_lama'):$reg->input('jenis');
                $antrian->id_pasien=$idPasien;
                $antrian->updated_at=null;
                $antrian->id_counter=0;
                $antrian->type=$reg->input('norm')!=""?'Lama':'Baru';
                $antrian->save();
                $id = $antrian->id;
                return redirect('antrian/print/'.$id);
            } catch (\Throwable $th) {
                //throw $th;
            }

        }else{
            $counter=CounterModel::where('no_counter','<>','1')->where('status','=','1')->get();
            return view('antrian.index',compact('counter'));
        }

    }
    public function print($id){
        $antrian = AntrianModel::where('id',$id)
        ->join('patients as a','a.patient_id','=','antrian.id_pasien')
        ->first();
        return view('antrian.print',compact('antrian'));
    }

    public function getAntrian(){
        $data = AntrianModel::where('status',0)
        ->where('id_counter','<>',0)->first();
        $message="";
        if($data){
            $pre = $data->type_antrian;
            $code ="";
            if($data->no_antrian<10){
                $code=" 0 0 ".(int)$data->no_antrian;
            }else if($data->no_antrian>=10 && $data->no_antrian<100){
                $code=" 0 ".(int)$data->no_antrian;
            }
            AntrianModel::where('id', $data->id)
            ->update(['status' => 1,'updated_at'=>null]);
            $message="Nomor Antrian ".$pre.$code." di Loket ".$data->id_counter;
        }
        $antrian = AntrianModel::whereNull('updated_at')
            ->where('id_counter','<>',0)->get();
        return response()->Json([
            'status'=>'success',
            'antrian'=>$antrian,
            'message'=> $message
        ]);
    }
}

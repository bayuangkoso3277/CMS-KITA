<?php

namespace App\Http\Controllers\Antrian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AntrianModel;
use App\Models\CounterModel;

class AntrianController extends Controller
{

    public function index()
    {
        $counter=CounterModel::where('no_counter','<>','1')->get();
        return view('antrian.index',compact('counter'));
    }
    public function print(){
        return view('antrian.print');
    }

    public function getAntrian(){
        $data = AntrianModel::where('status',0)
        ->where('id_counter','<>',0)->first();
        $message="";
        if($data){
            $pre = $data->type_antrian==1?'A':'P';
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

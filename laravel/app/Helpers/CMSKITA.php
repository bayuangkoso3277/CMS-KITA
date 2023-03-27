<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;

class CMSKITA
{
    public static function getNoAntrian($type){
        $sql = "select max(no_antrian)lastcode from antrian a where tgl_antrian >= current_date() and type_antrian='".$type."'";
        $data = collect(\DB::select($sql))->first();
        $lastcode = ($data->lastcode)+1;
        if($lastcode<10){
            $lastcode = '00'.$lastcode;
        }else if($lastcode<100){
            $lastcode = '0'.$lastcode;
        }else if($lastcode<1000){
            $lastcode = ''.$lastcode;
        }
        return $lastcode;
    }
}

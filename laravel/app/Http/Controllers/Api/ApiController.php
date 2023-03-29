<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AntrianModel;

class ApiController extends Controller
{
    //
    public function updateAntrian(Request $reg){
        try {
            AntrianModel::where('id', $reg->input('id'))
            ->update(['id_counter' => $reg->input('counter'),'status'=> 0,'updated_at'=>null]);
            return response()->json([
                'status'=>true,
                'msg'=>'Data has been updated'
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status'=>false,
                'msg'=>'Something when wrong !!'
            ]);
        }
    }
}

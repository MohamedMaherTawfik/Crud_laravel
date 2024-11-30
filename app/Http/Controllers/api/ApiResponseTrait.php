<?php

namespace App\Http\Controllers\api;

trait ApiResponseTrait{
    public function apiResponse($data=null, $message=null, $status=null){
        $array=[
            'status'=>$status,
            'message'=>$message,
            'result'=>$data
        ];
        return response($array);
    }
}


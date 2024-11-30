<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\NewUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    use ApiResponseTrait;
    public function index(){
        $users= UserResource::collection(NewUsers::all());
        return $this->apiResponse($users,'Data Recived Successfully',200,);
    }

    public function show(){
        $user=NewUsers::find(request('id'));
        if(!$user){
            return $this->apiResponse(null,'User Not Found',404);
        }else{
            return $this->apiResponse(new UserResource($user),'User Recived Successfully',200);
        }
    }

    public function store(){
        $validator= Validator::make(request()->all(),[
            'name'=>'required|min:3',
            'email'=>'required|email',
            'phoneNumber'=>'required|min:8'
        ]);

        if($validator->fails()){
            return $this->apiResponse(null,$validator->errors(),400);
        }


        $user=NewUsers::create(request()->all());
        if($user){
            return $this->apiResponse($user,'User Created Successfully',201);
        }
        else{
            return $this->apiResponse(null,'User Not Created',400);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel;

class UserController extends Controller
{
    public function getUserAll(){
        $result = UserModel::getUserAll();
        return $result;
    }

    public function getUser(){
        $data = $_GET;
        $result = UserModel::readUser($data);
        
        return $result;
    }

    public function saveUser(Request $request){
        $data = $request->post();
        // $data = $request->all();
        $insert_user = UserModel::createUser($data);
        
        if($insert_user == 1){
            $result= [
                "message"=>"insert success"
            ];
        } else {
            $result= [
                "message"=>"insert error"
            ];
        }
        return $result;
    }

    public function updateUser(Request $request){
        $data = $request->post();
        // $data = $request->all();
        $update_user = UserModel::updateUser($data);
        
        if($update_user == 1){
            $result= [
                "message"=>"update success"
            ];
        } else {
            $result= [
                "message"=>"update error"
            ];
        }
        return $result;
    }
}

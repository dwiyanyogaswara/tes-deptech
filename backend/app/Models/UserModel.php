<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    public static function readUserAll(){
        $result = DB::table('user')->get();
        return json_decode(json_encode($result), true);
    }

    public static function readUser($data){
        if(isset($data['id'])){
            $result = DB::table('user')->where('id', $data['id'])->get();
        } else if(isset($data['nama_depan'])){
            $result = DB::table('user')->where('nama_depan', $data['nama_depan'])->get();
        }
        
        return json_decode(json_encode($result), true);
    }

    public static function createUser($data){
        $insert_user = DB::table('user')->insert(array('nama_depan'=>$data['nama_depan'],
                                                            'nama_belakang'=>isset($data['nama_belakang'])?$data['nama_belakang']:NULL,
                                                            'email'=>$data['email'],
                                                            'tgl_lahir'=>$data['tgl_lahir'],
                                                            'jenis_kelamin'=>$data['jenis_kelamin'],
                                                            'password'=>$data['password'],
                                                            'role'=>$data['role'],
                                                            'is_active'=>1));
        
        return $insert_user;
    }

    public static function updateUser($data){
        if(isset($data['id'])){
            $result = DB::table('user')->where('id', $data['id'])->update(array('nama_depan'=>$data['nama_depan'],
                                                                                'nama_belakang'=>isset($data['nama_belakang'])?$data['nama_belakang']:NULL,
                                                                                'email'=>$data['email'],
                                                                                'tgl_lahir'=>$data['tgl_lahir'],
                                                                                'jenis_kelamin'=>$data['jenis_kelamin'],
                                                                                'password'=>$data['password'],
                                                                                'role'=>$data['role'],
                                                                                'is_active'=>1));
        } else {
            $result = 0;
        }
        
        return json_decode(json_encode($result), true);
    }

}

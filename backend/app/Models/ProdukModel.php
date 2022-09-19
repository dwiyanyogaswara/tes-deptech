<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProdukModel extends Model
{
    public static function readProdukAll(){
        $result = DB::table('produk')->get();
        return json_decode(json_encode($result), true);
    }

    public static function readProduk($data){
        if(isset($data['id'])){
            $result = DB::table('produk')->where('id', $data['id'])->get();
        } else if(isset($data['nama'])){
            $result = DB::table('produk')->where('nama', $data['nama'])->get();
        }
        
        return json_decode(json_encode($result), true);
    }

    public static function createProduk($data){
        $insert_produk = DB::table('produk')->insert(array('nama'=>$data['nama'],
                                                            'deskripsi'=>isset($data['deskripsi'])?$data['deskripsi']:NULL,
                                                            'gambar'=>$data['gambar'],
                                                            'id_kategori'=>$data['id_kategori'],
                                                            'stok'=>$data['stok']));
        
        return $insert_produk;
    }

    public static function updateProduk($data){
        if(isset($data['id'])){
            $result = DB::table('produk')->where('id', $data['id'])->update(array('nama'=>$data['nama'],
                                                                                    'deskripsi'=>isset($data['deskripsi'])?$data['deskripsi']:NULL,
                                                                                    'gambar'=>$data['gambar'],
                                                                                    'id_kategori'=>$data['id_kategori'],
                                                                                    'stok'=>$data['stok']));
        } else {
            $result = 0;
        }
        
        return json_decode(json_encode($result), true);
    }

    public static function deleteProduk($data){
        if(isset($data['id'])){
            $result = DB::table('produk')->where('id', $data['id'])->delete(); 
        } else {
            $result = 0;
        }
        
        return json_decode(json_encode($result), true);
    }


    //Kategori Produk
    public static function readKategoriProdukAll(){
        $result = DB::table('kategori_produk')->get();
        return json_decode(json_encode($result), true);
    }

    public static function createKategoriProduk($data){
        $insert_kategori_produk = DB::table('kategori_produk')->insert(array('kategori'=>$data['kategori'],
                                                            'deskripsi'=>isset($data['deskripsi'])?$data['deskripsi']:NULL));
        
        return $insert_kategori_produk;
    }

    public static function updateKategoriProduk($data){
        if(isset($data['id'])){
            $result = DB::table('kategori_produk')->where('id', $data['id'])->update(array('kategori'=>$data['kategori'],
                                                                                    'deskripsi'=>isset($data['deskripsi'])?$data['deskripsi']:NULL));
        } else {
            $result = 0;
        }
        
        return json_decode(json_encode($result), true);
    }
}

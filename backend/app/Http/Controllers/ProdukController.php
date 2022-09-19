<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class ProdukController extends Controller
{
    public function getProdukAll(){
        $result = ProdukModel::readProdukAll();
        return $result;
    }

    public function getProduk(){
        $data = $_GET;
        $result = ProdukModel::readProduk($data);
        
        return $result;
    }
    
    public function saveProduk(Request $request){
        $data = $request->post();
        // $data = $request->all();
        $insert_produk = ProdukModel::createProduk($data);
        
        if($insert_produk == 1){
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

    public function updateProduk(Request $request){
        $data = $request->post();
        // $data = $request->all();
        $update_produk = ProdukModel::updateProduk($data);
        
        if($update_produk == 1){
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

    public function deleteProduk(){
        $data = $_GET;
        // $data = $request->all();
        $delete_produk = ProdukModel::deleteProduk($data);
        
        if($delete_produk == 1){
            $result= [
                "message"=>"delete success"
            ];
        } else {
            $result= [
                "message"=>"delete error"
            ];
        }
        return $result;
    }


    //Kategori Produk

    public function getKategoriProdukAll(){
        $result = ProdukModel::getKategoriProdukAll();
        return $result;
    }

    public function saveKategoriProduk(Request $request){
        $data = $request->post();
        // $data = $request->all();
        $insert_kategori_produk = ProdukModel::createKategoriProduk($data);
        
        if($insert_kategori_produk == 1){
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

    public function updateKategoriProduk(Request $request){
        $data = $request->post();
        // $data = $request->all();
        $update_kategori_produk = ProdukModel::updateKategoriProduk($data);
        
        if($update_kategori_produk == 1){
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

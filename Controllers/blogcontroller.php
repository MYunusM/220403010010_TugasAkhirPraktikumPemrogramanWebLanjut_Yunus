<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogcontroller extends Controller
{
    public function index(){
 
    	return "ini halaman blog";
 
    }
    //public function form()
    //{
        //return view('about');
    //}
    //public function postData(Request $request)
    //{
        //$data = [
            //'nama'          =>  $request->input('nama'),
            //'nim'           =>  $request->input('nim'),
            //'prodi'         =>  $request->input('prodi'),
            //'keterangan'    =>  $request->input('keterangan')
        //];
        //dd($data);
    //}
}
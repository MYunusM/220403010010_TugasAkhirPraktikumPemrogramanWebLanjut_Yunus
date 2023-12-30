<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MahasiswaController extends Controller
{
   public function index()
   {
    $mahasiswa = DB::table('mhs2')->get();
    return view('data-mahasiswa', ['mahasiswa' => $mahasiswa]);
   }
   public function tambah(Request $request)
   {
      $foto_file = $request->file('foto');
      $foto_extensi = $foto_file->extension();
      $foto_nama = date('ymdhis').".".$foto_extensi;
      $foto_file->move(public_path('foto'), $foto_nama);
      DB::table('mhs2')->insert([
         'nim' => $request->nim,
         'nama' => $request->nama,
         'jk' => $request->jk,
         'prodi' => $request->prodi,
         'alamat' => $request->alamat,
         'foto' => $foto_nama,
      ]);
     
      return redirect('/data-mhs')->with('status', 'Data Mahasiswa Berhasil Di Tambahkan!');
   }

   public function form()
   {
      return view('tambah-data-mhs');
   }
   public function edit($id)
   {
   $mahasiswa = DB::table('mhs2')->where('nim', $id)->first();
   return view('edit-data-mhs', compact('mahasiswa'));
   }

   public function update(Request $request, $nim)
   {
      DB::table('mhs2')->where('nim', $nim)->update([
         'nim' => $request->nim,
         'nama' => $request->nama,
         'jk' => $request->jk,
         'prodi' => $request->prodi,
         'alamat' => $request->alamat,
     ]);
     if($request->hasFile('foto')){
      $foto_file = $request->file('foto');
      $foto_extensi = $foto_file->extension();
      $foto_nama = date('ymdhis').".".$foto_extensi;
      $foto_file->move(public_path('foto'), $foto_nama);

      $data_ft = DB::table('mhs2')->where('nim', $nim)->first();
      File::delete(public_path('foto').'/'.$data_ft->foto);
      DB::table('mhs2')->where('nim', $nim)->update([
         'foto' => $foto_nama,
      ]);
     }

     return redirect('/data-mhs')->with('status', 'Data Mahasiswa Berhasil Diubah!');
     
   }
   public function hapus($nim)
   {
   $data = DB::table('mhs2')->where('nim', $nim)->first();
   File::delete(public_path('foto').'/'.$data->foto);
   DB::table('mhs2')->where('nim', $nim)->delete();

   return redirect('/data-mhs')->with('status', 'Data Mahasiswa Berhasil Dihapus!');
   }
}

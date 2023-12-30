@extends('layout/navbar')
@section ('container')
<h3>Input Data Mahasiswa</h3><br/>
<a href="/data-mhs"> Kembali</a>
<br /><br/>
<form action="/mhs/tambah" method="post" enctype="multipart/form-data">
    <table>
    {{csrf_field()}}
    <tr>
    <td>Nim</td>
    <td>
    <input type="text" name="nim" id="nim" required="required"><br/><br/>
    </td></tr>
    <tr>
    <td>Nama</td>
    <td>
    <input type="text" name="nama" id="nama" required="required"><br/><br/>
    </td></tr>
    <tr>
    <td>Jenis Kelamin</td>
    <td> 
    <input type="text" name="jk" id ="jk" required="required"><br/><br/>
    </td></tr>
    <tr>
    <td>Prodi</td>
    <td> 
    <input type="text" name="prodi" id="prodi" required="required"><br/><br/>
    </td></tr>
    <tr>
    <td>Alamat</td> 
    <td>
    <textarea name="alamat" id="alamat" required="required"></textarea><br/><br/>
    </td></tr>
    <tr>
    <td>Foto</td>
    <td> 
    <input type="file" name="foto" id="foto" required="required"><br/><br/>
    </td></tr>
    <tr><td>
    <input type="submit" value="Simpan Data">
    </tr></td>
</table>
</form><br/>
@endsection
@extends('layout/navbar')
@section ('container')
<h3>Edit Data Mahasiswa</h3><br/>
<a href="/data-mhs"> Kembali</a>
<br /><br/>
<form action="{{ url('/mhs/edit/'. $mahasiswa->nim) }}" method="post" enctype="multipart/form-data">
    <table>
    {{csrf_field()}}
    <tr>
    <td>Nim</td>
    <td>
    <input type="text" name="nim"  value="{{ $mahasiswa->nim }}" required="required"><br/><br/>
    </td></tr>
    <tr>
    <td>Nama</td>
    <td>
    <input type="text" name="nama"  value="{{ $mahasiswa->nama }}" required="required"><br/><br/>
    </td></tr>
    <tr>
    <td>Jenis Kelamin</td>
    <td> 
    <input type="text" name="jk"  value="{{ $mahasiswa->jk }}" required="required"><br/><br/>
    </td></tr>
    <tr>
    <td>Prodi</td>
    <td> 
    <input type="text" name="prodi"  value="{{ $mahasiswa->prodi }}" required="required"><br/><br/>
    </td></tr>
    <tr>
    <td>Alamat</td> 
    <td>
    <textarea name="alamat"  required="required">{{ $mahasiswa->alamat }}</textarea><br/><br/>
    </td></tr>
    @if ($mahasiswa->foto)
    <tr>
    <td><img style="max-width:70px;max-height:70px" src=" {{ url('foto').'/'.$mahasiswa->foto}} "></td>
    <td> 
    </td></tr>
    @endif
    <tr>
    <td>Foto</td>
    <td> 
    <input type="file" name="foto"><br/><br/>
    </td></tr>
    <tr><td>
    <input type="submit" value="Simpan Data">
    </tr></td>
</table>
</form><br/>
@endsection
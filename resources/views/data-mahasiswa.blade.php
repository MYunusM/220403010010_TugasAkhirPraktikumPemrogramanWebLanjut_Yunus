@extends('layout/navbar')
@section('container')
<h1>Halaman Data Mahasiswa</h1><br>
<div>

    <table style="text-align:left ; border=1px solid; border-collapse: collapse;">
        <tr>
            <th style="border:1px solid; padding:10px; text-align:center">No</th>
            <th style="border:1px solid; padding:10px; text-align:center">Foto</th>
            <th style="border:1px solid; padding:10px; text-align:center">Nama</th>
            <th style="border:1px solid; padding:10px; text-align:center">NIM</th>
            <th style="border:1px solid; padding:10px; text-align:center">Jenis Kelamin</th>
            <th style="border:1px solid; padding:10px; text-align:center">Prodi</th>            
            <th style="border:1px solid; padding:10px; text-align:center">Alamat</th>
            <th style="border:1px solid; padding:10px; text-align:center">Opsi</th>            
        </tr>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td style="border:1px solid; padding:10px;">{{ $loop->iteration}}</td>
            <td style="border:1px solid; padding:4px;">
                @if ($mhs->foto)
                    <img style="max-width:70px;max-height:70px" src= " {{ url('foto'). '/'. $mhs->foto}} "/>
                @endif
            </td>
            <td style="border:1px solid; padding:10px;">{{ $mhs->nama}}</td>
            <td style="border:1px solid; padding:10px;">{{ $mhs->nim}}</td>
            <td style="border:1px solid; padding:10px;">{{ $mhs->jk}}</td>
            <td style="border:1px solid; padding:10px;">{{ $mhs->prodi}}</td>
            <td style="border:1px solid; padding:10px;">{{ $mhs->alamat}}</td>
            <td style="border:1px solid; padding:10px;">
            <a href="{{ url('/edit-data-mhs/'.$mhs->nim) }}">Ubah |</a>
            <a href="{{ url('/hapus-data-mhs/'.$mhs->nim) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
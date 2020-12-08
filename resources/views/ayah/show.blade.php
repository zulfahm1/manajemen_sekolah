@extends('includes.dashboard')
@section('title','ayah')
@section('addon-style')
    <style>
        td{
          padding: 5px;
        }
     </style>
@endsection
@section('content')
    

<div class="card-box mb-30 pd-20">
    <table class="w-100" cellpadding="6">
      <tr>
        <th>Id Siswa</th>
        <th>:</th>
        <td> {{ $ayah->siswa->nama_lengkap }}</td>
      </tr>
    <tr>
      <th>Nama lengkap</th>
      <th>:</th>
      <td> {{ $ayah->nama_lengkap }}</td>
    </tr>
    <tr>
      <th>Pendidikan</th>
      <th>:</th>
      <td> {{ $ayah->pendidikan->pendidikan }}</td>
    </tr>
    <tr>
      <th>Pekerjaan</th>
      <th>:</th>
      <td> {{ $ayah->pekerjaan->pekerjaan }}</td>
    </tr>
    <tr>
      <th>Tempat Lahir</th>
      <th>:</th>
      <td colspan="2">{{ $ayah->tempat_lahir }}</td>
    </tr>
    <tr>
      <th>Tanggal Lahir</th>
      <th>:</th>
      <td colspan="2">{{ $ayah->tanggal_lahir }}</td>
    </tr>
    <tr>
      <th>Penghasilan Perbulan</th>
      <th>:</th>
      <td colspan="2">{{ $ayah->penghasilan_perbulan }}</td>
    </tr>
    <tr>
      <th>Status</th>
      <th>:</th>
      <td colspan="2">{{ $ayah->is_live }}</td>
    </tr>
    <tr>
      <th>No Hp</th>
      <th>:</th>
      <td colspan="2">{{ $ayah->no_hp }}</td>
    </tr>

    <div class="row">
      <div class="col">
          <div class="form-group">
            <a href="{{ route('ayah.index',$ayah->id) }}">
              <button class="btn btn-primary">Kembali</button>
            </a>
          </div>
      </div>
    </div>
</table>
 
</div>
@endsection

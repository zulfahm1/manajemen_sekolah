@extends('includes.dashboard')
@section('title','siswa')
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
        <td> {{ $ibu->siswa->nama_lengkap }}</td>
      </tr>
    <tr>
      <th>Nama lengkap</th>
      <th>:</th>
      <td> {{ $ibu->nama_lengkap }}</td>
    </tr>
    <tr>
      <th>Pendidikan</th>
      <th>:</th>
      <td> {{ $ibu->pendidikan->pendidikan }}</td>
    </tr>
    <tr>
      <th>Pekerjaan</th>
      <th>:</th>
      <td> {{ $ibu->pekerjaan->pekerjaan }}</td>
    </tr>
    <tr>
      <th>Tempat Lahir</th>
      <th>:</th>
      <td colspan="2">{{ $ibu->tempat_lahir }}</td>
    </tr>
    <tr>
      <th>Tanggal Lahir</th>
      <th>:</th>
      <td colspan="2">{{ $ibu->tanggal_lahir }}</td>
    </tr>
    <tr>
      <th>Penghasilan Perbulan</th>
      <th>:</th>
      <td colspan="2">{{ $ibu->penghasilan_perbulan }}</td>
    </tr>
    <tr>
      <th>Status</th>
      <th>:</th>
      <td colspan="2">{{ $ibu->is_live }}</td>
    </tr>
    <tr>
      <th>No Hp</th>
      <th>:</th>
      <td colspan="2">{{ $ibu->no_hp }}</td>
    </tr>

    <div class="row">
      <div class="col">
          <div class="form-group">
            <a href="{{ route('ibu.index',$ibu->id) }}">
              <button class="btn btn-primary">Kembali</button>
            </a>
          </div>
      </div>
    </div>
</table>
 
</div>
@endsection

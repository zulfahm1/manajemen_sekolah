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
  <h5 class="text-center">Data Siswa</h5>
  <br> 
  <div class="card-content">
    <table class="w-100" cellpadding="6">
      <tr>
        <th>Nama lengkap Siswa</th>
        <th>:</th>
        <td> {{ $siswa->nama_lengkap }}</td>
      </tr>
      <tr>
        <th>Nama Panggilan</th>
        <th>:</th>
        <td> {{ $siswa->nama_panggilan }}</td>
      </tr>
      <tr>
        <th>Tempat Lahir</th>
        <th>:</th>
        <td >{{ $siswa->tempat_lahir }}</td>
      </tr>
      <tr>
        <th>Tanggal Lahir</th>
        <th>:</th>
        <td >{{ $siswa->tanggal_lahir }}</td>
      </tr>
      <tr>
        <th>Nik</th>
        <th>:</th>
        <td >{{ $siswa->nik }}</td>
      </tr>
      <tr>
        <th>Nis</th>
        <th>:</th>
        <td >{{ $siswa->nis }}</td>
      </tr>
      <tr>
        <th>Anak Ke</th>
        <th>:</th>
        <td >{{ $siswa->anak_ke }}</td>
      </tr>
      <tr>
        <th>Jumlah saudara</th>
        <th>:</th>
        <td >{{ $siswa->jumlah_saudara }}</td>
      </tr>
      </tr>
      <tr>
        <th>Tinggi Badan</th>
        <th>:</th>
        <td >{{ $siswa->tinggi_badan }}</td>
      </tr>
      </tr>
      <tr>
        <th>Berat Badan</th>
        <th>:</th>
        <td >{{ $siswa->berat_badan }}</td>
      </tr>
      </tr>
      <tr>
        <th>Alamat Lengkap</th>
        <th>:</th>
        <td >{{ $siswa->alamat_lengkap }}</td>
      </tr>
      </tr>
      <tr>
        <th>No Hp</th>
        <th>:</th>
        <td >{{ $siswa->no_hp }}</td>
      </tr>
      <tr>
        <th>Agama</th>
        <th>:</th>
        <td >{{ $siswa->agama }}</td>
      </tr>
  </table>
  </div>

</div>

<div class="card-box mb-30 pd-20">
  <h5 class="text-center">Data Ayah</h5>
  <br>
    <table class="w-100" cellpadding="6">
    <tr>
      <th>Nama Lengkap Ayah</th>
      <th>:</th>
      <td> {{ $ayah->nama_lengkap }}</td>
    </tr>
    <tr>
      <th>Tempat Lahir</th>
      <th>:</th>
      <td> {{ $ayah->tempat_lahir }}</td>
    </tr>
    <tr>
      <th>Tanggal Lahir</th>
      <th>:</th>
      <td> {{ $ayah->tanggal_lahir }}</td>
    </tr>
    <tr>
      <th>Pendidikan Terakhir</th>
      <th>:</th>
      <td >{{ $ayah->pendidikan->pendidikan }}</td>
    </tr>
    <tr>
      <th>Pekerjaan</th>
      <th>:</th>
      <td >{{ $ayah->pekerjaan->pekerjaan }}</td>
    </tr>
    <tr>
      <th>No Hp</th>
      <th>:</th>
      <td >{{ $ayah->no_hp }}</td>
    </tr>
    <tr>
      <th>Penghasilan Perbulan</th>
      <th>:</th>
      <td >{{ $ayah->penghasilan_perbulan }}</td>
    </tr>
    <tr>
      <th>Status</th>
      <th>:</th>
      <td >{{ $ayah->is_live }}</td>
    </tr> 
</table>
</div>


<div class="card-box mb-30 pd-20">
  <h5 class="text-center">Data Ibu</h5>
  <br>
  <table class="w-100" cellpadding="6">
  <tr>
    <th>Nama Lengkap Ibu</th>
    <th>:</th>
    <td> {{ $ibu->nama_lengkap }}</td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <th>:</th>
    <td> {{ $ibu->tempat_lahir }}</td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <th>:</th>
    <td> {{ $ibu->tanggal_lahir }}</td>
  </tr>
  <tr>
    <th>Pendidikan Terakhir</th>
    <th>:</th>
    <td >{{ $ibu->pendidikan->pendidikan }}</td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <th>:</th>
    <td >{{ $ibu->pekerjaan->pekerjaan }}</td>
  </tr>
  <tr>
    <th>No Hp</th>
    <th>:</th>
    <td >{{ $ibu->no_hp }}</td>
  </tr>
  <tr>
    <th>Penghasilan Perbulan</th>
    <th>:</th>
    <td >{{ $ibu->penghasilan_perbulan }}</td>
  </tr>
  <tr>
    <th>Status</th>
    <th>:</th>
    <td >{{ $ibu->is_live }}</td>
  </tr> 
</table>
</div>




</div>
<div class="card-box p-3 mb-4">
  <a href="{{ route('siswa.index',$siswa->id) }}">
    <button class="btn btn-primary">Kembali</button>
  </a>
</div>

@endsection



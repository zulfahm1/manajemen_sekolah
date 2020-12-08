@extends('includes.dashboard')
@section('title','create siswa')
@section('content')
    

<div class="card-box mb-30 pd-20">
    <div class="">
        <h4 class="text-blue h4">Tambah Data Ayah</h4>
    </div>
    <form action="{{ route('ayah.store') }}" method="post"> 
        @csrf
        <div class="pb-20">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" name="id_siswa" placeholder="nama lengkap..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap Orang Tua </label>
                        <input type="text" name="nama_lengkap" placeholder="nama lengkap..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" placeholder="tempat lahir..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" placeholder="tanggal lahir..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <select name="pendidikan_id"  class="form-control">
                            @foreach ($pendidikan as $item)
                                <option value="{{ $item->pendidikan_id }}">{{ $item->pendidikan }}</option>
                            @endforeach
                        </select> </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <select name="pekerjaan_id"  class="form-control">
                            @foreach ($pekerjaan as $item)
                                <option value="{{ $item->pekerjaan_id }}">{{ $item->pekerjaan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No Hp</label>
                        <input type="text" name="no_hp" placeholder="no hp..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Penghasilan Perbulan</label>
                        <input type="text" name="penghasilan_perbulan" placeholder="penghasilan perbulan..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="is_live"  class="form-control">
                            <option value="hidup">Hidup</option>
                            <option value="meninggal">Meninggal</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <button class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </div>
          </div>
    </form>
</div>
@endsection



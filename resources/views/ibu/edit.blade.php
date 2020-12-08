@extends('includes.dashboard')
@section('title','create pendidikan')
@section('content')
    
<div class="card-box mb-30 pd-20">
    <div class="">
        <h4 class="text-blue h4">Edit Data Ibu</h4>
    </div>
    <form action="{{ route('ibu.update', $ib->id) }}" method="post"> 
        @method('put')
        @csrf
        <div class="pb-20">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Id Siswa</label>
                        <input type="text" name="id_siswa" placeholder="nama lengkap..." class="form-control" value="{{ $ib->id_siswa }}">
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" placeholder="nama lengkap..." class="form-control" value="{{ $ib->nama_lengkap }}">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" placeholder="tempat lahir..." class="form-control" value="{{ $ib->tempat_lahir }}">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" placeholder="tanggal lahir..." class="form-control" value="{{ $ib->tanggal_lahir }}">
                    </div>
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <input type="text" name="pendidikan_id" placeholder="pendidikan..." class="form-control" value="{{ $ib->pendidikan_id }}">
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan_id" placeholder="pekerjaan..." class="form-control" value="{{ $ib->pekerjaan_id }}">
                    </div>
                    <div class="form-group">
                        <label>No Hp</label>
                        <input type="text" name="no_hp" placeholder="no hp..." class="form-control" value="{{ $ib->no_hp }}">
                    </div>
                    <div class="form-group">
                        <label>Penghasilan Perbulan</label>
                        <input type="text" name="penghasilan_perbulan" placeholder="penghasilan perbulan..." class="form-control" value="{{ $ib->penghasilan_perbulan }}">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="is_live"  class="form-control" value="{{ $ib->is_live }}">
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



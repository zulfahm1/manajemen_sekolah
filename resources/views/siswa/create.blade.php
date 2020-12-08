@extends('includes.dashboard')
@section('title','create siswa')
@section('content')
    
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="card-box mb-30 pd-20">
    
    <div class="">
        <h4 class="text-blue h4">Tambah Data Siswa</h4>
    </div>
    <form action="{{ route('siswa.store') }}" method="post"> 
        @csrf
         <div class="pb-20">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" placeholder="nama lengkap..." class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Panggilan</label>
                        <input type="text" name="nama_panggilan" placeholder="nama panggilan..." class="form-control">
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" placeholder="tanggal lahir..." class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nik</label>
                        <input type="text" name="nik" placeholder="nik..." class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nis</label>
                        <input type="text" name="nis" placeholder="nis..." class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" placeholder="tempat lahir..." class="form-control">
                    </div>
                </div>
            </div>
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Anak Ke</label>
                    <input type="text" name="anak_ke" placeholder="anak ke..." class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Jumlah Saudara</label>
                    <input type="text" name="jumlah_saudara" placeholder="jumlah saudara..." class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Tinggi Badan</label>
                    <input type="text" name="tinggi_badan" placeholder="tinggi badan..." class="form-control">
                </div>
            </div>
           </div>
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Berat Badan</label>
                    <input type="text" name="berat_badan" placeholder="berat badan..." class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>No Hp</label>
                    <input type="text" name="no_hp" placeholder="no hp..." class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Agama</label>
                    <select name="agama"  class="form-control">
                        <option value="islam">Islam</option>
                        <option value="katolik">Katolik</option>
                        <option value="protestan">Protestan</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="konghucu">konghucu</option>
                    </select>
                </div>
            </div>
           </div>
            <div class="row">
                <div class="col">
                       <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" name="alamat_lengkap" placeholder="alamat lengkap..." class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" placeholder="asal sekolah..." class="form-control">
                    </div>
                   
                </div>
            </div> 
      {{-- data ayah --}}
        <div class="pb-20">
            <div class="row">
                <div class="col">
                    <div class="">
                        <h4 class="text-blue h4">Tambah Data Ayah</h4>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Lengkap Ayah </label>
                                <input type="text" name="ayah_nama_lengkap" placeholder="nama lengkap..." class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="ayah_tempat_lahir" placeholder="tempat lahir..." class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="ayah_tanggal_lahir" placeholder="tanggal lahir..." class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <select name="ayah_pekerjaan_id"  class="form-control custom-select2">
                                    @foreach ($pekerjaan as $item)
                                        <option value="{{ $item->id }}">{{ $item->pekerjaan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <select name="ayah_pendidikan_id"  class="form-control">
                                    @foreach ($pendidikan as $item)
                                        <option value="{{ $item->id }}">{{ $item->pendidikan }}</option>
                                    @endforeach
                                </select> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>No Hp</label>
                                <input type="text" name="ayah_no_hp" placeholder="no hp..." class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Penghasilan Perbulan</label>
                                <input type="text" name="ayah_penghasilan_perbulan" placeholder="penghasilan perbulan..." class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="ayah_is_live"  class="form-control">
                                    <option value="hidup">Hidup</option>
                                    <option value="meninggal">Meninggal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
          </div>
        </div>
        <div class="pb-20">
            <div class="row">
                <div class="col">
                    <div class="">
                        <h4 class="text-blue h4">Tambah Data Ibu</h4>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Lengkap Ibu</label>
                                <input type="text" name="ibu_nama_lengkap" placeholder="nama lengkap..." class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="ibu_tempat_lahir" placeholder="tempat lahir..." class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="ibu_tanggal_lahir" placeholder="tanggal lahir..." class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <select name="ibu_pekerjaan_id"  class="form-control custom-select2">
                                   @foreach ($pekerjaan as $item)
                                      <option value="{{ $item->id }}">{{ $item->pekerjaan }}</option>
                                   @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <select name="ibu_pendidikan_id"  class="form-control">
                                    @foreach ($pendidikan as $item)
                                        <option value="{{ $item->id }}">{{ $item->pendidikan }}</option>
                                    @endforeach
                                </select> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>No Hp</label>
                                <input type="text" name="ibu_no_hp" placeholder="no hp..." class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Penghasilan Perbulan</label>
                                <input type="text" name="ibu_penghasilan_perbulan" placeholder="penghasilan perbulan..." class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="ibu_is_live"  class="form-control">
                                    <option value="hidup">Hidup</option>
                                    <option value="meninggal">Meninggal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
          </div>
        </div>
        {{-- data ibu --}}
       <div>
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



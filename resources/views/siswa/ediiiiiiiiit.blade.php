@extends('includes.dashboard')
@section('title','create pendidikan')
@section('content')
    
<div class="card-box mb-30 pd-20">
    
    <div class="">
        <h4 class="text-blue h4">Edit Data Siswa</h4>
    </div>
    <form action="{{ route('siswa.update',$sis->id ) }}" method="post"> 
        @csrf @method('PUT')
        <h6>data siswa</h6>
        <br>
        <div class="pb-20">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap"  value="{{ $sis->nama_lengkap }}"  placeholder="nama lengkap..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama Panggilan</label>
                        <input type="text" name="nama_panggilan" value="{{ $sis->nama_panggilan }}"  placeholder="nama panggilan..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="{{ $sis->tempat_lahir }}"  placeholder="tempat lahir..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="{{ $sis->tanggal_lahir }}"  placeholder="tanggal lahir..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nik</label>
                        <input type="text" name="nik" value="{{ $sis->nik }}"  placeholder="nik..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nis</label>
                        <input type="text" name="nis" value="{{ $sis->nis }}"  placeholder="nis..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Anak Ke</label>
                        <input type="text" name="anak_ke" value="{{ $sis->anak_ke }}"  placeholder="anak ke..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Saudara</label>
                        <input type="text" name="jumlah_saudara" value="{{ $sis->jumlah_saudara }}"  placeholder="jumlah saudara..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tinggi Badan</label>
                        <input type="text" name="tinggi_badan" value="{{ $sis->tinggi_badan }}"  placeholder="tinggi badan..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Berat Badan</label>
                        <input type="text" name="berat_badan" value="{{ $sis->berat_badan }}"  placeholder="berat badan..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" name="alamat_lengkap" value="{{ $sis->alamat_lengkap }}"  placeholder="alamat lengkap..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No Hp</label>
                        <input type="text" name="no_hp" value="{{ $sis->no_hp }}"  placeholder="no hp..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" value="{{ $sis->asal_sekolah }}"  placeholder="asal sekolah..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select name="agama"  class="form-control">
                            <option {{ $sis->agama == 'islam' ? 'selected' : '' }} value="islam">Islam</option>
                            <option {{ $sis->agama == 'katolik' ? 'selected' : '' }} value="katolik">Katolik</option>
                            <option {{ $sis->agama == 'protestan' ? 'selected' : '' }} value="protestan">Protestan</option>
                            <option {{ $sis->agama == 'hindu' ? 'selected' : '' }} value="hindu">Hindu</option>
                            <option {{ $sis->agama == 'budha' ? 'selected' : '' }} value="budha">Budha</option>
                            <option {{ $sis->agama == 'konghucu' ? 'selected' : '' }} value="konghucu">konghucu</option>
                        </select>
                    </div>
                </div>
            </div>
            
            
            <br>
        {{-- data ayah --}}
        <div class="pb-20">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nama Lengkap Orang Tua </label>
                        <input type="text" name="ayah_nama_lengkap" value="{{ $ayah->nama_lengkap }}"  placeholder="nama lengkap..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="ayah_tempat_lahir" value="{{ $ayah->tempat_lahir }}"  placeholder="tempat lahir..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="ayah_tanggal_lahir" value="{{ $ayah->tanggal_lahir }}"  placeholder="tanggal lahir..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <select name="ayah_pendidikan_id"  class="form-control">
                            @foreach ($pendidikan as $item)
                                <option {{ $item->pendidikan_id == $ayah->pendidikan_id ? 'selected' : '' }} value="{{ $item->pendidikan_id }}">{{ $item->pendidikan }}</option>
                            @endforeach
                        </select> 
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <select name="ayah_pekerjaan_id"  class="form-control">
                            <option value="">- pilih pekerjaan -</option>
                            @foreach ($pekerjaan as $item)
                                <option {{ $item->id == $ayah->pekerjaan_id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->pekerjaan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No Hp</label>
                        <input type="text" name="ayah_no_hp" value="{{ $ayah->no_hp }}"  placeholder="no hp..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Penghasilan Perbulan</label>
                        <input type="text" name="ayah_penghasilan_perbulan" value="{{ $ayah->penghasilan_perbulan }}"  placeholder="penghasilan perbulan..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="ayah_is_live"  class="form-control">
                            <option  {{ $ayah->is_live == 'hidup' ? 'selected' : '' }} value="hidup">Hidup</option>
                            <option {{ $ayah->is_live == 'meninggal' ? 'selected' : '' }} value="meninggal">Meninggal</option>
                        </select>
                    </div>
                </div>
            </div>
          </div>
        {{-- data ibu --}}
        <h6>data ibu</h6>
        <br>
        <div class="pb-20">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nama Lengkap Ibu</label>
                        <input type="text" name="ibu_nama_lengkap" value="{{ $ibu->nama_lengkap }}"  placeholder="nama lengkap..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="ibu_tempat_lahir" value="{{ $ibu->tempat_lahir }}"  placeholder="tempat lahir..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="ibu_tanggal_lahir" value="{{ $ibu->tanggal_lahir }}"  placeholder="tanggal lahir..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <select name="ibu_pendidikan_id"  class="form-control">
                            @foreach ($pendidikan as $item)
                                <option {{ $item->pendidikan_id == $ibu->pendidikan_id ? 'selected' : '' }} value="{{ $item->pendidikan_id }}">{{ $item->pendidikan }}</option>
                            @endforeach
                        </select> 
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <select name="ibu_pekerjaan_id"  class="form-control">
                           @foreach ($pekerjaan as $item)
                              <option {{ $item->pekerjaan_id == $ibu->pekerjaan_id ? 'selected' : '' }} value="{{ $item->pekerjaan_id }}">{{ $item->pekerjaan }}</option>
                           @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No Hp</label>
                        <input type="text" name="ibu_no_hp" value="{{ $ibu->no_hp }}"  placeholder="no hp..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Penghasilan Perbulan</label>
                        <input type="text" name="ibu_penghasilan_perbulan" value="{{ $ibu->penghasilan_perbulan }}"  placeholder="penghasilan perbulan..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="ibu_is_live"  class="form-control">
                            <option  {{ $ibu->is_live == 'hidup' ? 'selected' : '' }} value="hidup">Hidup</option>
                            <option {{ $ibu->is_live == 'meninggal' ? 'selected' : '' }} value="meninggal">Meninggal</option>
                        </select>
                    </div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
                <div class="form-group">
                    <button class="btn btn-primary">Edit Data</button>
                </div>
            </div>
        </div>
      </div>
    
    </form>
</div>

@endsection



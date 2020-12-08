<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Siswa;
use App\Models\Ayah;
use App\Models\Ibu;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sis = Siswa::all();
        return view('siswa.index', compact('sis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pekerjaan=Pekerjaan::all();
        $pendidikan=Pendidikan::all();
        return view('siswa.create',compact('pekerjaan','pendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nik' => 'required',
            'nis' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'alamat_lengkap' => 'required',
            'no_hp' => 'required',
            'asal_sekolah' => 'required',
            'agama' => 'required',
            /* ayah */
            'ayah_nama_lengkap' => 'required',
            'ayah_pendidikan_id' => 'required',
            'ayah_pekerjaan_id' => 'required',
            'ayah_no_hp' => 'required',
            'ayah_tempat_lahir' => 'required',
            'ayah_tanggal_lahir' => 'required',
            'ayah_penghasilan_perbulan' => 'required',
            'ayah_is_live' => 'required',
            /* ibu */
            'ibu_nama_lengkap' => 'required',
            'ibu_pendidikan_id' => 'required',
            'ibu_pekerjaan_id' => 'required',
            'ibu_no_hp' => 'required',
            'ibu_tempat_lahir' => 'required',
            'ibu_tanggal_lahir' => 'required',
            'ibu_penghasilan_perbulan' => 'required',
            'ibu_is_live' => 'required',

        ]);   

        $keSiswa = [
            'nama_lengkap' => $request->nama_lengkap,
            'nama_panggilan' => $request->nama_panggilan,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nik' => $request->nik,
            'nis' => $request->nis,
            'anak_ke' => $request->anak_ke,
            'jumlah_saudara' => $request->jumlah_saudara,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'alamat_lengkap' => $request->alamat_lengkap,
            'no_hp' => $request->no_hp,
            'asal_sekolah' => $request->asal_sekolah,
            'agama' => $request->agama,
        ];

        $siswa = Siswa::create($keSiswa);
        
        $keAyah = [
            'id_siswa' => $siswa->id,
            'nama_lengkap' => $request->ayah_nama_lengkap,
            'pendidikan_id' => $request->ayah_pendidikan_id,
            'pekerjaan_id' => $request->ayah_pekerjaan_id,
            'no_hp' => $request->ayah_no_hp,
            'tempat_lahir' => $request->ayah_tempat_lahir,
            'tanggal_lahir' => $request->ayah_tanggal_lahir,
            'penghasilan_perbulan' => $request->ayah_penghasilan_perbulan,
            'is_live' => $request->ayah_is_live,
        ];
        $keIbu = [
            'id_siswa' => $siswa->id,
            'nama_lengkap' => $request->ibu_nama_lengkap,
            'pendidikan_id' => $request->ibu_pendidikan_id,
            'pekerjaan_id' => $request->ibu_pekerjaan_id,
            'no_hp' => $request->ibu_no_hp,
            'tempat_lahir' => $request->ibu_tempat_lahir,
            'tanggal_lahir' => $request->ibu_tanggal_lahir,
            'penghasilan_perbulan' => $request->ibu_penghasilan_perbulan,
            'is_live' => $request->ibu_is_live,
        ];

        Ayah::create($keAyah);
        Ibu::create($keIbu);
        
        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        $ibu = Ibu::where('id_siswa',$id)->first();
        $ayah = Ayah::where('id_siswa',$id)->first();

        return view('siswa.show', compact('siswa','ayah','ibu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $sis = Siswa::findOrFail($id);
        $ibu = Ibu::where('id_siswa',$id)->first();
        $ayah = Ayah::where('id_siswa',$id)->first();
        $pekerjaan=Pekerjaan::all();
        $pendidikan=Pendidikan::all();
        return view('siswa.edit', compact('sis','ibu','ayah','pekerjaan','pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        
        $request->validate([
        'nama_lengkap' => 'required',
        'nama_panggilan' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'nik' => 'required',
        'nis' => 'required',
        'anak_ke' => 'required',
        'jumlah_saudara' => 'required',
        'tinggi_badan' => 'required',
        'berat_badan' => 'required',
        'alamat_lengkap' => 'required',
        'no_hp' => 'required',
        'asal_sekolah' => 'required',
        'agama' => 'required',
        /* ayah */
        'ayah_nama_lengkap' => 'required',
        'ayah_pendidikan_id' => 'required',
        'ayah_pekerjaan_id' => 'required',
        'ayah_no_hp' => 'required',
        'ayah_tempat_lahir' => 'required',
        'ayah_tanggal_lahir' => 'required',
        'ayah_penghasilan_perbulan' => 'required',
        'ayah_is_live' => 'required',
        /* ibu */
        'ibu_nama_lengkap' => 'required',
        'ibu_pendidikan_id' => 'required',
        'ibu_pekerjaan_id' => 'required',
        'ibu_no_hp' => 'required',
        'ibu_tempat_lahir' => 'required',
        'ibu_tanggal_lahir' => 'required',
        'ibu_penghasilan_perbulan' => 'required',
        'ibu_is_live' => 'required',

    ]);   

    $keSiswa = [
        'nama_lengkap' => $request->nama_lengkap,
        'nama_panggilan' => $request->nama_panggilan,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'nik' => $request->nik,
        'nis' => $request->nis,
        'anak_ke' => $request->anak_ke,
        'jumlah_saudara' => $request->jumlah_saudara,
        'tinggi_badan' => $request->tinggi_badan,
        'berat_badan' => $request->berat_badan,
        'alamat_lengkap' => $request->alamat_lengkap,
        'no_hp' => $request->no_hp,
        'asal_sekolah' => $request->asal_sekolah,
        'agama' => $request->agama,
    ];
    
   Siswa::find($id)->update($keSiswa);
    
    $keAyah = [
        'id_siswa' => $id,
        'nama_lengkap' => $request->ayah_nama_lengkap,
        'pendidikan_id' => $request->ayah_pendidikan_id,
        'pekerjaan_id' => $request->ayah_pekerjaan_id,
        'no_hp' => $request->ayah_no_hp,
        'tempat_lahir' => $request->ayah_tempat_lahir,
        'tanggal_lahir' => $request->ayah_tanggal_lahir,
        'penghasilan_perbulan' => $request->ayah_penghasilan_perbulan,
        'is_live' => $request->ayah_is_live,
    ];
    $keIbu = [
        'id_siswa' => $id,
        'nama_lengkap' => $request->ibu_nama_lengkap,
        'pendidikan_id' => $request->ibu_pendidikan_id,
        'pekerjaan_id' => $request->ibu_pekerjaan_id,
        'no_hp' => $request->ibu_no_hp,
        'tempat_lahir' => $request->ibu_tempat_lahir,
        'tanggal_lahir' => $request->ibu_tanggal_lahir,
        'penghasilan_perbulan' => $request->ibu_penghasilan_perbulan,
        'is_live' => $request->ibu_is_live,
    ];

    Ayah::where('id_siswa',$id)->update($keAyah);
    Ibu::where('id_siswa',$id)->update($keIbu);
    
    return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Siswa::find($id)->delete();
        Ayah::where('id_siswa',$id)->delete();
        Ibu::where('id_siswa',$id)->delete();
        return redirect('/siswa');
    }
}

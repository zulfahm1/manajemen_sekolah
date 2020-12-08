@extends('includes.dashboard')
@section('title','siswa')
@section('content')
    
<div class="card-box mb-30 pd-20">
    <div class="clearfix">
        <h4 class="text-blue h4">Data Orang Tua  Ayah</h4>
        <a href="{{ route('ayah.create') }}" class="btn btn-primary float-right">Tambah Data</a>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th>No </th>
                    <th>Nama </th>
                    <th>Pekerjaan</th>
                    <th>No Telpon</th>
                    <th>Penghasilan </th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ayh as $ayah)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ayah->nama_lengkap }}</td>
                    <td>{{ $ayah->pekerjaan->pekerjaan }}</td>
                    <td>{{ $ayah->no_hp }}</td>
                    <td>Rp. {{ $ayah->penghasilan_perbulan }}</td>
                    <td>{{ $ayah->is_live }}</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="{{ route('ayah.show',$ayah->id) }}"><i class="dw dw-eye"></i> Details</a>
                                <a class="dropdown-item" href="{{ route('ayah.edit',$ayah->id) }}"><i class="dw dw-edit2"></i> Edit</a>
                                <form action="{{ route('ayah.destroy',$ayah->id) }}" method="post">
                                    @csrf @method('delete')
                                    <button class="dropdown-item"><i class="dw dw-delete-3"></i> Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

    


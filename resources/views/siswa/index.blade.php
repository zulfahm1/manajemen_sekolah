@extends('includes.dashboard')
@section('title','siswa')
@section('content')
    
<div class="card-box mb-30 pd-20">
    <div class="clearfix">
        <h4 class="text-blue h4">Data Table Siswa</h4>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary float-right">Tambah Data</a>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Nis</th>
                    <th>No Telpon</th>
                    <th>Agama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sis as $siswa)
                <tr> 
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $siswa->nama_lengkap }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->no_hp }}</td>
                    <td>{{ $siswa->agama }}</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="{{ route('siswa.show',$siswa->id) }}"><i class="dw dw-eye"></i> Details</a>
                                <a class="dropdown-item" href="{{ route('siswa.edit',$siswa->id) }}"><i class="dw dw-edit2"></i> Edit</a>
                                <form action="{{ route('siswa.destroy',$siswa->id) }}" method="post">
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



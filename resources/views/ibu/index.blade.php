@extends('includes.dashboard')
@section('title','siswa')
@section('content')
    
<div class="card-box mb-30 pd-20">
    <div class="clearfix">
        <h4 class="text-blue h4">Data Orang Tua Ibu</h4>
        <a href="{{ route('ibu.create') }}" class="btn btn-primary float-right">Tambah Data</a>
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
                @foreach ($ib as $ibu)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ibu->nama_lengkap }}</td>
                    <td>{{ $ibu->pekerjaan->pekerjaan }}</td>
                    <td>{{ $ibu->no_hp }}</td>
                    <td>Rp. {{ $ibu->penghasilan_perbulan }}</td>
                    <td>{{ $ibu->is_live }}</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="{{ route('ibu.show',$ibu->id) }}"><i class="dw dw-eye"></i> Details</a>
                                <a class="dropdown-item" href="{{ route('ibu.edit',$ibu->id) }}"><i class="dw dw-edit2"></i> Edit</a>
                                <form action="{{ route('ibu.destroy',$ibu->id) }}" method="post">
                                    @csrf @method('delete')
                                    <button class="dropdown-item"><i class="dw dw-delete-3"></i> Delete</button>
                                </form>
                            < /div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

    


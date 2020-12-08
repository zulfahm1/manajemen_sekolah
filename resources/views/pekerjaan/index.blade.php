@extends('includes.dashboard')
@section('title','pendidikan')
@section('content')
    
<div class="card-box mb-30 pd-20">
    <div class="clearfix">
        <h4 class="text-blue h4">Data Table Pekerjaan</h4>
        <a href="{{ route('pendidikan.create') }}" class="btn btn-primary float-right">Tambah Data</a>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pekerjaan</th>
                    <th>Wali</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pek as $pekerjaan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pekerjaan->pekerjaan }}</td>
                    <td>{{ $pekerjaan->ayah->count()+$pekerjaan->ibu->count() }} &nbsp; Orang</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                {{-- <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a> --}}
                                <a class="dropdown-item" href="{{ route('pekerjaan.edit',$pekerjaan->id) }}"><i class="dw dw-edit2"></i> Edit</a>
                                <form action="{{ route('pekerjaan.destroy',$pekerjaan->id) }}" method="post">
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



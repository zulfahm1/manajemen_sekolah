@extends('includes.dashboard')
@section('title','create pekerjaan')
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
        <h4 class="text-blue h4">Edit Data Pekerjaan</h4>
    </div>
    <form action="{{ route('pekerjaan.update',$pek->id) }}" method="post"> 
        @method('put')
        @csrf
        <div class="pb-20">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan" placeholder="pekerjaan..." class="form-control" value="{{ $pek->pekerjaan }}">
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



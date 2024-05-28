@extends('dashboard.layouts.main')
@section('title', 'Edit Data Keperluan Kunjungan')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Keperluan Kunjungan</h6>
        </div>
        <div class="card-body">
            <form action="{{route('keperluan-kunjungan.update',$keperluan_kunjungan->id)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group @error('keperluan') has-error @enderror">
                    <label for="keperluan">Keperluan Kunjungan</label>
                    <input type="text" class="form-control" id="keperluan" name="keperluan" value="{{old('keperluan',$keperluan_kunjungan->keperluan)}}"
                           required>
                    @error('keperluan')
                    <span class="help-block text-danger">{{$message}}</span>
                    @enderror

                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
    </div>
@endsection

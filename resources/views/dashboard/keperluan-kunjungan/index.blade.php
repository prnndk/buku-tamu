@extends('dashboard.layouts.main')

@section('title', 'Keperluan Kunjungan')

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
            <h6 class="m-0 font-weight-bold text-primary">Data Keperluan Kunjungan</h6>
        </div>
        <div class="card-body">
            <a href="{{route('keperluan-kunjungan.create')}}" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Keperluan</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($keperluan_kunjungans as $keperluan_kunjungan)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$keperluan_kunjungan->keperluan}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{route('keperluan-kunjungan.edit',$keperluan_kunjungan->id)}}" class="btn btn-sm btn-warning mr-2"><i class="fas fa-pencil-alt"></i> </a>
                                    <form action="{{route('keperluan-kunjungan.destroy',$keperluan_kunjungan->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

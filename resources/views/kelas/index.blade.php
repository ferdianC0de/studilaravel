@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kelas') }}</div>

                <div class="card-body">

                    <a href="{{ route('data-kelas.create') }}" class="btn btn-success">Tambah Data</a>
                   <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Action</th>
                        </thead>
                        @foreach ($dataKelas as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->nama_kelas }}</td>
                                <td>-</td>
                            </tr>
                        @endforeach
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

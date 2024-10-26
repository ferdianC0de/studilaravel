@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kelas') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('data-kelas.store') }}">
                        @csrf
                        <div class="mb-3">
                          <label for="nama_kelas" class="form-label">Nama Kelas</label>
                          <input type="text" class="form-control" id="nama_kelas" name="nama_kelas">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Detail {{ $anggota->name }}
                    </div>
                    <div class="card-body">
                        Nama : {{ $anggota->name }}<br>
                        Pangkat : {{ $anggota->pangkat->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
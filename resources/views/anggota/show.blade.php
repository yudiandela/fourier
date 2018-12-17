@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="/storage/avatar3.png" alt="" class="rounded-circle border">
                        <div class="mt-2">
                            <h4>{{ $anggota->name }}</h4>
                            <p>{{ $anggota->pangkat->short . ' NRP ' . $anggota->nrp }} </p>
                        </div>
                        <div class="mt-2">
                            <a href="#" class="btn btn-primary btn-sm">Follow</a>
                            <a href="#" class="btn btn-danger btn-sm">Message</a>
                        </div>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">Cras justo odio</a>
                        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        Kontent disini
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
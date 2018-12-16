@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        List Anggota
                        <a href="{{ route('anggota.create') }}" class="btn btn-primary float-right">Tambah Anggota</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Pangkat</th>
                                    <th>N R P</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($anggotas->count() > 0)
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($anggotas as $anggota)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $anggota->name }}</td>
                                        <td>{{ $anggota->pangkat }}</td>
                                        <td>{{ $anggota->nrp }}</td>
                                        <td>
                                            <a href="{{ route('anggota.edit', $anggota->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('anggota.destroy', $anggota->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center">Belum ada data</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
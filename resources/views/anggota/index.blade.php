@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
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
                                        <td>{{ $anggota->pangkat->short }}</td>
                                        <td>{{ $anggota->nrp }}</td>
                                        <td>
                                            <a href="{{ route('anggota.show', $anggota->id) }}" class="btn btn-success btn-sm">{{ __('Detail') }}</a>
                                            <a href="{{ route('anggota.edit', $anggota->id) }}" class="btn btn-primary btn-sm">{{ __('Edit') }}</a>
                                            <a href="{{ route('anggota.destroy', $anggota->id) }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('hapus-anggota-{{ $anggota->id }}').submit();"
                                                class="btn btn-danger btn-sm">{{ __('Hapus') }}
                                            </a>

                                            <form id="hapus-anggota-{{ $anggota->id }}" action="{{ route('anggota.destroy', $anggota->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
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
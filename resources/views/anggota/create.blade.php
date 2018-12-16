@extends('layouts.app')

@section('content')
<form action="{{ route('anggota.store') }}" method="POST">
    @csrf
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Anggota
                        <button class="btn btn-primary float-right">Submit Data</button>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="pangkat">Pangkat</label>
                            <select name="pangkat" id="pangkat" class="form-control{{ $errors->has('pangkat') ? ' is-invalid' : '' }}">
                                <option selected value="">Pilih Pangkat...</option>
                                @foreach ($pangkats as $pangkat)
                                    <option value="{{ $pangkat->id }}"
                                        {{ old('pangkat') == $pangkat->id ? ' selected' : '' }}>
                                        {{ $pangkat->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('pangkat'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('pangkat') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="nrp">N R P</label>
                            <input type="text" name="nrp" id="nrp" class="form-control{{ $errors->has('nrp') ? ' is-invalid' : '' }}" value="{{ old('nrp') }}">
                            @if ($errors->has('nrp'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nrp') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
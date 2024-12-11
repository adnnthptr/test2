@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Data Pasien
                </div>
                <div class="card-body">
                    <form action="{{ url('pasien/' . $pasien->id) }}" method="POST">
                        @method('PUT') 
                        @csrf

                        <div class="form-group">
                            <label for="kode_pasien">Kode Pasien</label>
                            <input id="kode_pasien" class="form-control" type="text" name="kode_pasien"
                                value="{{ $pasien->kode_pasien ?? old('kode_pasien') }}">
                            <span class="text-danger">{{ $errors->first('kode_pasien') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="nama_pasien">Nama Pasien</label>
                            <input id="nama_pasien" class="form-control" type="text" name="nama_pasien"
                                value="{{ $pasien->nama_pasien ?? old('nama_pasien') }}">
                            <span class="text-danger">{{ $errors->first('nama_pasien') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input id="jenis_kelamin" class="form-control" type="text" name="jenis_kelamin"
                                value="{{ $pasien->jenis_kelamin ?? old('jenis_kelamin') }}">
                            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <input id="status" class="form-control" type="text" name="status"
                                value="{{ $pasien->status ?? old('status') }}">
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <select id="alamat" class="form-control" name="alamat">
                                @foreach ($list_sp as $a)
                                    <option value="{{ $a }}" @selected($a == $pasien->alamat)>{{ $a }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input id="no_hp" class="form-control" type="text" name="no_hp"
                                value="{{ $pasien->no_hp ?? old('no_hp') }}">
                            <span class="text-danger">{{ $errors->first('no_hp') }}</span>
                        </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
@endsection

@extends('layouts.sbadmin2')
@section('isinya')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tambah data pasien
                </div>
                <div class="card-body">
                    <form action="{{ url('pasien',[]) }}" method="POST">

                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label for="kode_pasien">Kode pasien</label>
                            <input id="kode_pasien" class="form-control" type="text" name="kode_pasien"
                                value="{{ old('kode_pasien') }}">
                            <span class="text-danger">{{ $errors->first('kode_pasien') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="nama_pasien">Nama Pasien</label>
                            <input id="nama_pasien" class="form-control" type="text" name="nama_pasien"
                                value="{{ old('nama_pasien') }}">
                            <span class="text-danger">{{ $errors->first('nama_pasien') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" class="form-control" name="status">
                                @foreach ($list_sp as $a)
                                <option value="{{ $a }}" @selected($a==old('status'))>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input id="alamat" class="form-control" type="text" name="alamat"
                                value="{{ old('alamat') }}">
                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                        </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
@endsection
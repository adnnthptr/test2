@extends('layouts.sbadmin2')

@section('isinya')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tambah Data Pasien
                </div>
                <div class="card-body">
                    <form action="{{ route('pasien.store') }}" method="POST"> <!-- Menggunakan route 'pasien.store' -->

                        @csrf <!-- Token CSRF untuk keamanan -->
                        
                        <div class="form-group">
                            <label for="kode_pasien">Kode Pasien</label>
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
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input id="jenis_kelamin" class="form-control" type="text" name="jenis_kelamin"
                                value="{{ old('jenis_kelamin') }}">
                            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" class="form-control" name="status">
                                @foreach ($list_sp as $a)
                                <option value="{{ $a }}" @selected($a == old('status'))>{{ $a }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
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

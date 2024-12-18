@extends('layouts.sbadmin2')

@section('isinya')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Registrasi Data Pasien
                </div>
                <div class="card-body">
                    <form action="{{ route('pasien.store') }}" method="POST"> <!-- Menggunakan route 'pasien.store' -->

                        @csrf <!-- Token CSRF untuk keamanan -->
                        
                        {{-- No. KTP --}}
                        <div class="form-group">
                            <label for="kode_pasien">Kode Pasien</label>
                            <input id="kode_pasien" class="form-control" type="text" name="kode_pasien"
                                value="{{ old('kode_pasien') }}">
                            <span class="text-danger">{{ $errors->first('kode_pasien') }}</span>
                        </div>

                        {{-- Nama Pasien --}}
                        <div class="form-group">
                            <label for="nama_pasien">Nama Pasien</label>
                            <input id="nama_pasien" class="form-control" type="text" name="nama_pasien"
                                value="{{ old('nama_pasien') }}">
                            <span class="text-danger">{{ $errors->first('nama_pasien') }}</span>
                        </div>

                        {{-- Jenis Kelamin --}}
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                                <option value="">Pilih Jenis Kelamin</option>
                                @foreach ($list_sp as $a)
                                    <option value="{{ $a }}" @selected($a == old('jenis_kelamin'))>
                                        {{ $a }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                        </div>

                        {{-- Status --}}
                        <div class="form-group">
                            <label for="status">Status</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="status" id="status_lama" class="form-check-input"
                                    value="Pasien Lama" @checked(old('status') == 'Pasien Lama')>
                                <label for="status_lama" class="form-check-label">Pasien Lama</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="status" id="status_baru" class="form-check-input"
                                    value="Pasien Baru" @checked(old('status') == 'Pasien Baru')>
                                <label for="status_baru" class="form-check-label">Pasien Baru</label>
                            </div>
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                        </div>

                        {{-- Alamat --}}
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control">{{ old('alamat') }}</textarea>
                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                        </div>

                        {{-- Submit --}}
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

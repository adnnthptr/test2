@extends('layouts.sbadmin2')
@section('isinya')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tambah data administrasi
                </div>
                <div class="card-body">
                    <form action="{{ url('administrasi',[]) }}" method="POST">

                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label for="my-input">Tanggal</label>
                            <input id="my-input" class="form-control" type="date" name="tanggal"
                                value="{{ old('tanggal') }}">
                            <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="my-select">Pasien</label>
                            <select id="my-select" class="form-control" name="pasien_id"
                                <option value="">Pilih Pasien</option>
                            @foreach ($list_pasien as $id => $a)
                                <option value="{{ $id }}" @selected($id==old('pasien_id'))>
                                    {{ $a }}
                                </option>
                            <span class="text-danger">{{ $errors->first('pasien_id') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="my-select">Dokter</label>
                            <select id="my-select" class="form-control" name="dokter_id"
                                <option value="">Pilih Dokter</option>
                            @foreach ($list_pasien as $id => $a)
                                <option value="{{ $id }}" @selected($id==old('pasien_id'))>
                                    {{ $a }}
                                </option>
                            <span class="text-danger">{{ $errors->first('pasien_id') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="my-input">No HP</label>
                            <input id="my-input" class="form-control" type="number" name="biaya"
                                value="{{ old('biaya') }}">
                            <span class="text-danger">{{ $errors->first('biaya') }}</span>
                        </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection
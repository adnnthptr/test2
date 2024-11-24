@extends('layouts.sbadmin2')
@section('isinya')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode Pasien</th>
                                <th>Nama Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>Status</th>
                                <th>Alamat</th>
                                <th>Created</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pasien as $b)
                            <tr>
                                <td>{{ $b->id }}</td>
                                <td>{{ $b->kode_pasien }}</td>
                                <td>{{ $b->nama_pasien }}</td>
                                <td>{{ $b->jenis_kelamin }}</td>
                                <td>{{ $b->status }}</td>
                                <td>{{ $b->alamat }}</td>
                                <td>{{ $b->created_at }}</td>
                                <td> edit
                                     hapus
                                </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
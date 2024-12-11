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
                                <td>
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('pasien.edit', $b->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('pasien.destroy', $b->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Menambahkan Pagination jika ada banyak data -->
                    <div class="d-flex justify-content-center">
                        {{ $pasien->links() }}
                    </div>

                </div>
                <div class="card-footer">
                    <!-- Tombol Tambah Data (jika diperlukan) -->
                    <a href="{{ route('pasien.create') }}" class="btn btn-primary btn-sm">Tambah Data Pasien</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

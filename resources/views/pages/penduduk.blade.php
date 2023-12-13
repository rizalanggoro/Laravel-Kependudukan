@extends('app')

@section('content')
    <div>
        <h3 class="mt-3">Penduduk</h3>

        <div class="row mt-3">
            <form action="/penduduk/cari" method="GET">
                <div class="row gap-2">
                    <input name="nama" value="{{ old('nama') }}" type="text" class="form-control col"
                        placeholder="Nama penduduk">
                    <button type="submit" class="btn btn-primary col col-3">Cari</button>
                </div>
            </form>
        </div>

        <div class="overflow-x-auto mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Pendidikan Terakhir</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Status Kawin</th>
                        <th scope="col">Kewarganegaraan</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($arrayPenduduk as $penduduk)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $penduduk['nik'] }}</td>
                            <td>{{ $penduduk['nama'] }}</td>
                            <td>{{ $penduduk['tanggal_lahir'] }}</td>
                            <td>{{ $penduduk['jenis_kelamin'] }}</td>
                            <td>{{ $penduduk['pendidikan_terakhir'] }}</td>
                            <td>{{ $penduduk['no_hp'] }}</td>
                            <td>{{ $penduduk['status_nikah'] }}</td>
                            <td>{{ $penduduk['status_kewarganegaraan'] }}</td>
                            <td>
                                <div class="gap-2 d-flex">
                                    <a href="/penduduk/ubah/{{ $penduduk['nik'] }}">
                                        <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{ $penduduk['nik'] }}">
                                        Hapus
                                    </button>

                                    <div class="modal fade" id="modalDelete{{ $penduduk['nik'] }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi
                                                        Penghapusan</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah Anda yakin akan menghapus data
                                                        <strong>{{ $penduduk['nama'] }}?</strong>
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <form action="/penduduk/{{ $penduduk['nik'] }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

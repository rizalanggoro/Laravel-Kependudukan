@extends('app')

@section('content')
    <div x-data="{ arrayPenduduk: [], test() { console.log("hello world"); } }">
        <h3 class="mt-3">Penduduk</h3>

        <div class="row">
            <div class="row col-6">
                <input name="name" type="text" class="form-control col" placeholder="Nama penduduk">
                <button type="submit" class="btn btn-primary col" @click="test()">Cari</button>
            </div>
        </div>

        <div class="overflow-x-auto">
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

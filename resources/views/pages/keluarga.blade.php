@extends('app')

@section('content')
    <div class="container">
        {{-- table content --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">No KK</th>
                    <th scope="col">Jumlah Anggota</th>
                    <th scope="col">Nama Kepala Keluarga</th>
                    <th scope="col">Domisili</th>
                    <th scope="col">Provinsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($arrayKeluarga as $keluarga)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $keluarga['no_kk'] }}</td>
                        <td>{{ $keluarga['jumlah_anggota'] }}</td>
                        <td>{{ $keluarga['nama_kepala_keluarga'] }}</td>
                        <td>{{ $keluarga['domisili'] }}</td>
                        <td>{{ $keluarga->wilayah['nama_provinsi'] }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

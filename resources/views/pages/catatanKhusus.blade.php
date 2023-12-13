@extends('app')
@section('content')
    <div>
        <h3 class="mt-3">Catatan Khusus</h3>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Isi</th>
                    <th scope="col">No KK</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($arrayCatatanKhusus as $catatan)
                    <tr>
                        <th scope="row">{{ $catatan['kode_catatan'] }}</th>
                        <td>{{ $catatan['tanggal'] }}</td>
                        <td>{{ $catatan['jenis'] }}</td>
                        <td>{{ $catatan['isi'] }}</td>
                        <td>{{ $catatan['no_kk'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

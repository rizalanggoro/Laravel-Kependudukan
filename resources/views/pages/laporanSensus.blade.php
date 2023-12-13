@extends('app')
@section('content')
    <div>
        <h3 class="mt-3">Laporan Sensus</h3>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">No Seri</th>
                    <th scope="col">Tanggal Sensus</th>
                    <th scope="col">Petugas Sensus</th>
                    <th scope="col">Metode Sensus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($arrayLaporanSensus as $laporan)
                    <tr>
                        <th scope="row">{{ $laporan['no_seri'] }}</th>
                        <td>{{ $laporan['tanggal_sensus'] }}</td>
                        <td>{{ $laporan['nama_petugas'] }}</td>
                        <td>{{ $laporan['metode_sensus'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

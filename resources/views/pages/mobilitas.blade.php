@extends('app')
@section('content')
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tanggal</th>
                    @if ($type == 'transmigrasi')
                        <th scope="col">Tujuan</th>
                        <th scope="col">Asal</th>
                    @else
                        @if ($type == 'imigrasi')
                            <th scope="col">Negara Asal</th>
                        @else
                            <th scope="col">Negara Tujuan</th>
                        @endif
                    @endif

                </tr>
            </thead>
            <tbody>
                @foreach ($arrayMobilitas as $mobilitas)
                    <tr>
                        <th scope="row">{{ strval($mobilitas['id_mobilitas']) }}</th>
                        <td>{{ $mobilitas->mobilitas['tanggal_perpindahan'] }}</td>
                        @if ($type == 'transmigrasi')
                            <td>{{ $mobilitas['daerah_tujuan'] }}</td>
                            <td>{{ $mobilitas['daerah_asal'] }}</td>
                        @else
                            @if ($type == 'imigrasi')
                                <td>{{ $mobilitas['negara_asal'] }}</td>
                            @else
                                <td>{{ $mobilitas['negara_tujuan'] }}</td>
                            @endif
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

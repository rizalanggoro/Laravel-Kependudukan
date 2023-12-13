@extends('app')
@section('content')
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Jenis Disabilitas</th>
                    <th scope="col">Status</th>
                    <th scope="col">Informasi Medis</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($arrayDisabilitas as $disabilitas)
                    <tr>
                        <td>{{ $disabilitas['jenis_disabilitas'] }}</td>
                        <td>{{ $disabilitas['status_disabilitas'] }}</td>
                        <td>{{ $disabilitas['informasi_medis'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

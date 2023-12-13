@extends('app')
@section('content')
    <div>
        <h3 class="mt-3">Disabilitas</h3>
        <table class="table mt-3">
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

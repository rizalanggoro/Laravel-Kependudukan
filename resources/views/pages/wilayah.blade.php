@extends('app')

@section('content')
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Kode Provinsi</th>
                    <th scope="col">Nama Provinsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($arrayWilayah as $wilayah)
                    <tr>
                        <th scope="row">{{ $wilayah['kode_provinsi'] }}</th>
                        <td>{{ $wilayah['nama_provinsi'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

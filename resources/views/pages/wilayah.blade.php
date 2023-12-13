@extends('app')

@section('content')
    <div>
        <h3 class="mt-3">Wilayah</h3>

        <table class="table mt-3">
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

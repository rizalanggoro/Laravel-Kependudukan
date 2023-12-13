@extends('app')
@section('content')
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Jenis Pekerjaan</th>
                    <th scope="col">Gaji</th>
                    <th scope="col">Tahun Mulai</th>
                    <th scope="col">

                        @if ($type == 'asn')
                            {{ 'Instansi' }}
                        @else
                            {{ 'Nama Perusahaan' }}
                        @endif
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($arrayPekerjaan as $item)
                    <tr>
                        <th scope="row">{{ $item['id_pekerjaan'] }}</th>
                        <td>{{ $item->pekerjaan['jenis_pekerjaan'] }}</td>
                        <td>Rp {{ $item->pekerjaan['gaji'] }}</td>
                        <td>{{ $item->pekerjaan['tahun_mulai'] }}</td>
                        @if ($type == 'asn')
                            <td>{{ $item['instansi'] }}</td>
                        @else
                            <td>{{ $item['nama_perusahaan'] }}</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

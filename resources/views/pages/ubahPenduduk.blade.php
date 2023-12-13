@extends('app')
@section('content')
    <div>
        <form action="/penduduk" method="POST">
            @csrf
            <input type="hidden" class="form-control" id="nama" value="{{ $penduduk['nik'] }}" name="nik">

            <div class="mt-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" value="{{ $penduduk['nama'] }}" name="nama">
            </div>

            <div class="mt-2">
                <label for="pendidikan" class="form-label">Pendidikan terakhir</label>
                <input type="text" class="form-control" id="pendidikan" value="{{ $penduduk['pendidikan_terakhir'] }}"
                    name="pendidikan_terakhir">
            </div>

            <div class="mt-2">
                <label for="status" class="form-label">Status nikah</label>
                <input type="text" class="form-control" id="status" value="{{ $penduduk['status_nikah'] }}"
                    name="status_nikah">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan perubahan</button>
        </form>
    </div>
@endsection

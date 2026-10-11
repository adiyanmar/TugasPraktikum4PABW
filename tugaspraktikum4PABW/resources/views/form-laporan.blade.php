@extends('layouts.app')

@section('content')
<h2>Form Pelaporan Banjir</h2>

@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="/simpan" method="POST">
    @csrf
    <label>Nama Pelapor:</label><br>
    <input type="text" name="nama_pelapor" value="{{ old('nama_pelapor') }}"><br><br>

    <label>Lokasi:</label><br>
    <input type="text" name="lokasi" value="{{ old('lokasi') }}"><br><br>

    <label>Tinggi Genangan (cm):</label><br>
    <input type="number" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}"><br><br>

    <label>Tanggal Kejadian:</label><br>
    <input type="date" name="tanggal_kejadian" value="{{ old('tanggal_kejadian') }}"><br><br>

    <button type="submit">Kirim Laporan</button>
</form>
@endsection
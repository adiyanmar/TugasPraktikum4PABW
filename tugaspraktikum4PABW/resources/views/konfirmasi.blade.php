@extends('layouts.app')

@section('content')
<x-alert type="success">
    Laporan dari <strong>{{ $laporan->nama_pelapor }}</strong> di
    <strong>{{ $laporan->lokasi }}</strong> (genangan {{ $laporan->tinggi_genangan }} cm)
    berhasil disimpan!
</x-alert>

<a href="/lapor">Kirim laporan lagi</a> |
<a href="/daftar-laporan">Lihat daftar laporan</a>
@endsection
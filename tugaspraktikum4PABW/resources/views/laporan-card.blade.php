<div style="border:1px solid #ccc; padding:10px; margin-bottom:10px">
    <h3>{{ $laporan->lokasi }}</h3>
    <p>Pelapor: {{ $laporan->nama_pelapor }}</p>
    <p>Tanggal: {{ $laporan->tanggal_kejadian->format('d-m-Y') }}</p>
    <p>Tinggi genangan: {{ $laporan->tinggi_genangan }} cm</p>
    <p>Status: <strong>{{ $laporan->status }}</strong></p>
</div>
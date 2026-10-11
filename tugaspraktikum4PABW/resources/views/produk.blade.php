<h2>Daftar Produk</h2>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID</th><th>Nama</th><th>Kategori</th><th>Harga</th><th>Stok</th>
    </tr>
    @foreach ($produk as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->kategori->nama }}</td>
        <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
        <td>{{ $p->stok }}</td>
    </tr>
    @endforeach
</table>
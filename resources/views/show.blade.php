<!-- resources/views/buku/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detail Buku</title>
</head>
<body>
    <h1>Detail Buku</h1>
    <p>Kode Buku: {{ $buku->kode_buku }}</p>
    <p>Judul: {{ $buku->judul }}</p>
    <p>Penerbit: {{ $buku->penerbit }}</p>
    <p>Tahun Terbit: {{ $buku->tahun_terbit }}</p>
    @if ($buku->data_gambar)
        <img src="{{ route('buku.show', $buku->kode_buku) }}" alt="{{ $buku->nama_file }}" style="width: 300px;">
    @else
        No image
    @endif
</body>
</html>

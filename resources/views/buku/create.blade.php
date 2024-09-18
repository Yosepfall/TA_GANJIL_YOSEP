<!-- resources/views/buku/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="kode_buku">Kode Buku:</label>
        <input type="text" name="kode_buku" id="kode_buku" required>
        <br>
        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" required>
        <br>
        <label for="penerbit">Penerbit:</label>
        <input type="text" name="penerbit" id="penerbit" required>
        <br>
        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="text" name="tahun_terbit" id="tahun_terbit" required>
        <br>
        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" id="gambar">
        <br>
        <button type="submit">Tambah Buku</button>
    </form>
</body>
</html>

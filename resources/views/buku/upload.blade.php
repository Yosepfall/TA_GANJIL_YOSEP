<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="{{ route('buku.create') }}">Tambah Buku</a>
    <table>
        <thead>
            <tr>
                <th>Kode Buku</th>
                <th>Judul</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $b)
                <tr>
                    <td>{{ $b->kode_buku }}</td>
                    <td>{{ $b->judul }}</td>
                    <td>{{ $b->penerbit }}</td>
                    <td>{{ $b->tahun_terbit }}</td>
                    <td>
                        @if ($b->data_gambar)
                            <img src="data:image/jpeg;base64,{{ base64_encode( $b->data_gambar) }}" alt="{{ $b->nama_file }}" style="width: 100px;">
                        @else
                            No image
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>



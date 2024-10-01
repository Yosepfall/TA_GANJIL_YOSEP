<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .fade-in {
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .alert-no-border {
            border: none; 
            padding: 0; 
            margin-bottom: 1rem; 
            background: none; 
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Nama Buku: {{ $buku->judul }}</h1>
        
        @if(session('success'))
            <div class="alert alert-success alert-no-border fade-in" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form id="peminjamanForm" action="{{ route('peminjaman.store') }}" method="POST">
            @csrf
            <input type="hidden" name="kode_buku" value="{{ $buku->kode_buku }}">
            
            <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" class="form-control" id="nisn" name="nisn" required>
            </div>
            
            <div class="mb-3">
                <label for="tanggal_pinjam" class="form-label">Tanggal Peminjaman</label>
                <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
            </div>

            <div id="combinedAlert" class="alert alert-danger alert-no-border" style="display: none;"></div>
            
            <button type="submit" class="btn btn-primary">Pinjam Buku</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

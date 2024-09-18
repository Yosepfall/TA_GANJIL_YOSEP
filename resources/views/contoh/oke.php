// rute
use App\Http\Controllers\BukuController;

// Menampilkan formulir untuk menambah buku
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

// Menyimpan buku
Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');

// Menampilkan daftar buku (opsional)
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');



//model 1
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'kategori_id',
        'penulis_id',
        'path_gambar',
        'harga',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'penulis_id');
    }
}


//model2
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function buku()
    {
        return $this->hasMany(Buku::class, 'kategori_id');
    }
}


//model 3
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'biografi'];

    public function buku()
    {
        return $this->hasMany(Buku::class, 'penulis_id');
    }
}


//controller
<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penulis;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function create()
    {
        $kategori = Kategori::all();
        $penulis = Penulis::all();
        return view('buku.create', compact('kategori', 'penulis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori_id' => 'required|exists:kategori,id',
            'penulis_id' => 'required|exists:penulis,id',
            'path_gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
        ]);

        $path = $request->file('path_gambar') ? $request->file('path_gambar')->store('images', 'public') : null;

        Buku::create([
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'kategori_id' => $request->input('kategori_id'),
            'penulis_id' => $request->input('penulis_id'),
            'path_gambar' => $path,
            'harga' => $request->input('harga'),
        ]);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function index()
    {
        $buku = Buku::with('kategori', 'penulis')->get();
        return view('buku.index', compact('buku'));
    }
}

//form upload foto 
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="judul">Judul Buku:</label>
        <input type="text" id="judul" name="judul" required>

        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi"></textarea>

        <label for="kategori_id">Kategori:</label>
        <select id="kategori_id" name="kategori_id" required>
            @foreach ($kategori as $kat)
                <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
            @endforeach
        </select>

        <label for="penulis_id">Penulis:</label>
        <select id="penulis_id" name="penulis_id" required>
            @foreach ($penulis as $pen)
                <option value="{{ $pen->id }}">{{ $pen->nama }}</option>
            @endforeach
        </select>

        <label for="path_gambar">Gambar Buku:</label>
        <input type="file" id="path_gambar" name="path_gambar" accept="image/*">

        <label for="harga">Harga:</label>
        <input type="text" id="harga" name="harga" required>

        <button type="submit">Tambah Buku</button>
    </form>
</body>
</html>


//index
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Gambar</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $bk)
                <tr>
                    <td>{{ $bk->judul }}</td>
                    <td>{{ $bk->deskripsi }}</td>
                    <td>{{ $bk->kategori->nama }}</td>
                    <td>{{ $bk->penulis->nama }}</td>
                    <td>
                        @if ($bk->path_gambar)
                            <img src="{{ asset('storage/' . $bk->path_gambar) }}" alt="Gambar Buku" width="100">
                        @endif
                    </td>
                    <td>{{ $bk->harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

<!-- resources/views/buku/index.blade.php -->
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

<!-- resources/views/buku/index.blade.php -->
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




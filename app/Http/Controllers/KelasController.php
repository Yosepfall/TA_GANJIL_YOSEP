namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    // Menampilkan daftar kelas
    public function index()
    {
        $kelas = Kelas::all(); // Mengambil semua data kelas
        return view('kelas.index', compact('kelas')); // Mengirim data ke view
    }

    // Menampilkan form untuk menambahkan data kelas baru
    public function create()
    {
        return view('kelas.create'); // Menampilkan form create
    }

    // Menyimpan data kelas baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kode_kelas' => 'required|unique:kelas|max:10',
            'tingkat' => 'required|max:10',
            'jurusan' => 'required|max:50',
        ]);

        // Menyimpan data ke database
        Kelas::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('kelas.index')
                         ->with('success', 'Kelas berhasil ditambahkan');
    }

    // Menampilkan data kelas berdasarkan id
    public function show($id)
    {
        $kelas = Kelas::find($id); // Mengambil data kelas berdasarkan kode_kelas
        return view('kelas.show', compact('kelas')); // Mengirim data ke view
    }

    // Menampilkan form untuk edit data kelas
    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('kelas.edit', compact('kelas'));
    }

    // Memperbarui data kelas yang sudah ada
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'tingkat' => 'required|max:10',
            'jurusan' => 'required|max:50',
        ]);

        // Update data kelas di database
        $kelas = Kelas::find($id);
        $kelas->update($request->all());

        return redirect()->route('kelas.index')
                         ->with('success', 'Kelas berhasil diperbarui');
    }

    // Menghapus data kelas
    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        return redirect()->route('kelas.index')
                         ->with('success', 'Kelas berhasil dihapus');
    }
}

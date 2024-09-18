namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('kelas')->get(); // Mengambil semua data siswa dengan relasi kelas
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        $kelas = Kelas::all(); // Mengambil semua kelas untuk pilihan
        return view('siswa.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|unique:siswa|max:10',
            'nama' => 'required|max:100',
            'alamat' => 'required',
            'no_telp' => 'required|max:15',
            'kode_kelas' => 'required|exists:kelas,kode_kelas',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')
                         ->with('success', 'Siswa berhasil ditambahkan');
    }

    public function show($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.show', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        $kelas = Kelas::all(); // Mengambil data kelas untuk dropdown
        return view('siswa.edit', compact('siswa', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'alamat' => 'required',
            'no_telp' => 'required|max:15',
            'kode_kelas' => 'required|exists:kelas,kode_kelas',
        ]);

        $siswa = Siswa::find($id);
        $siswa->update($request->all());

        return redirect()->route('siswa.index')
                         ->with('success', 'Data siswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect()->route('siswa.index')
                         ->with('success', 'Siswa berhasil dihapus');
    }
}

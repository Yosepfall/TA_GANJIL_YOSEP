namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $fillable = ['nisn', 'tanggal_pinjam', 'tanggal_kembali'];
}

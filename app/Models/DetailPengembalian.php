namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPengembalian extends Model
{
    protected $table = 'detail_pengembalian';
    protected $fillable = ['id_pengembalian', 'kode_buku', 'jumlah'];
}

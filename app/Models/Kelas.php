namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'kode_kelas';
    protected $fillable = ['kode_kelas', 'tingkat', 'jurusan'];
}

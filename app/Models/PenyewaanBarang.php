<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyewaanBarang extends Model
{
    use HasFactory;
    protected $table = 'penyewaan_barang';
    protected $fillable = [
        'id_anggota', 'id_alat', 'tanggal_sewa', 'tanggal_kembali', 'biaya', 'status', 'keterangan'
    ];
}

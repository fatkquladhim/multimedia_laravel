<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanBarang extends Model
{
    use HasFactory;
    protected $table = 'peminjaman_barang';
    protected $fillable = [
        'id_anggota', 'id_alat', 'tanggal_pinjam', 'tanggal_kembali', 'status', 'keterangan'
    ];
}

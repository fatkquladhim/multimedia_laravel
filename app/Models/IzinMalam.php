<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IzinMalam extends Model
{
    use HasFactory;
    protected $table = 'izin_malam';
    protected $fillable = [
        'id_anggota', 'tanggal', 'jam_izin', 'jam_selesai_izin', 'alasan'
    ];
}

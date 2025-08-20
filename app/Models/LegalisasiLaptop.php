<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalisasiLaptop extends Model
{
    use HasFactory;
    protected $table = 'legalisasi_laptop';
    protected $fillable = [
        'id_anggota', 'merk', 'tipe', 'serial_number', 'file_bukti', 'status'
    ];
}

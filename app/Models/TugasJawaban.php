<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasJawaban extends Model
{
    use HasFactory;
    protected $table = 'tugas_jawaban';
    protected $fillable = [
        'id_tugas', 'id_anggota', 'jawaban', 'tanggal_kumpul', 'nilai', 'catatan'
    ];
}

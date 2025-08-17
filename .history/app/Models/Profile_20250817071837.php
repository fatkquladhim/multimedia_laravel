<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $fillable = [
        'id_anggota', 'foto', 'bio', 'alamat', 'no_hp', 'email', 'tanggal_lahir'
    ];
}

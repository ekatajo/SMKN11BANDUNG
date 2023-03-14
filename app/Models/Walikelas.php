<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walikelas extends Model
{
    use HasFactory;

    protected $table = 'walikelas';
    protected $fillable = ['kode_kelas', 'nip'];

    public function guru(){
        return $this->belongsTo(Guru::class, 'nip');
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kode_kelas');
    }

}

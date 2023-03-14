<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Siswa extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'siswa';
    protected $primaryKey = 'nis';

    protected $fillable = ['nis', 'nama', 'email', 'username', 'password', 'kode_kelas',  'gender', 'alamat', 'kecamatan', 'kota', 'kodepos', 'tahun'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function kelas(){
     	return $this->belongsTo(Kelas::class, 'kode_kelas');
     }
     public function nilai(){
        return $this->hasMany(Nilai::class, 'nis');
    }
}

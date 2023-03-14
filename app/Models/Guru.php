<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class guru extends Authenticatable
{   
     use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'guru';
    protected $primaryKey = 'nip';

    // Class = Guru (Nama Model) (Class Diagram)
    // Attribut (Class Diagram)
    // Sequential (Berurutan)
    // Percabangan (IF, ELSE)
    // Perulangan (Foreach)
    protected $fillable = ['nip', 'nama', 'email', 'username', 'password', 'level',  'gender', 'alamat', 'kecamatan', 'kota', 'kodepos', 'kode_mapel'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
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

    protected function role(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["kurikulum", "walikelas", "guru"]
        );
    }

    public function kelas(){
        return $this->hasManyThrough(Kelas::class, Walikelas::class, 'nip', 'kode', 'nip', 'kode_kelas');
    }
    // public function mapel(){
    //     return $this->hasManyThrough(Mapel::class, Mengajar::class, 'nip', 'kode', 'nip', 'kode_mapel');
    // }
    public function kelasWK(){
        return $this->hasManyThrough(Kelas::class, Walikelas::class, 'nip', 'kode', 'nip', 'kode_kelas');
    }
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'nip');
    }
    public function mapel(){
        return $this->belongsTo(Mapel::class, 'kode_mapel');
    }
    public function walikelas(){
        return $this->hasMany(Walikelas::class, 'nip');
    }
    public function komponen(){
        return $this->hasMany(Komponen::class, 'nip');
    }
    public function activity(){
        // Memanggil Relasi Melalui NIP ke ActivityLog
        return $this->hasMany(ActivityLog::class, 'nip');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogKomponen extends Model
{
    use HasFactory;

    protected $table = 'log_komponen';
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function mapel(){
        return $this->belongsTo(Mapel::class, 'kode_mapel');
    }
    public function komponen(){
        return $this->belongsTo(Komponen::class, 'id');
    }
}

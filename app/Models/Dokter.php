<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table ="dokter";
    protected $fillable = [
        'user_id',
        'alamat',
        'tempat',
        'ttl',
        'pend',
        'spesialis',  
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function jadwal(){
        return $this->hasMany(Jadwal::class,'user_id','user_id')->where('aktif',1);
    }
}
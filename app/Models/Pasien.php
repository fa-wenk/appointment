<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table ="pasien";
    protected $fillable = [
        'user_id',
        'alamat',
        'tempat',
        'ttl',
        'jk',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fotografer extends Model
{
    use HasFactory;

    protected $table = 'fotografers';

    protected $fillable = [
        'foto',
        'nama',
        'pengalaman',
        'alamat_email',
        'kontak'
    ];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }

}
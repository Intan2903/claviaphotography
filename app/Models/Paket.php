<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    use HasFormatRupiah;

    protected $table = 'pakets';

    protected $fillable = [
        'foto',
        'nama_paket',
        'harga_paket',
        'ket_paket'
    ];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }

}
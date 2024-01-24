<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;

    protected $table = 'mobil';

    protected $fillable = [
        'ID_mobil',
            'Merek',
            'Model',
            'Tahun_Produksi',
            'Harga'
    ];
}

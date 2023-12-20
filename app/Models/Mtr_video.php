<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mtr_video extends Model
{
    use HasFactory;

    protected $fillable = [
        'url_video',
        'pertemuan_id',
        'deskripsi',
    ];

    function pertemuan()
    {
        $this->belongsTo(Pertemuan::class);
    }
}

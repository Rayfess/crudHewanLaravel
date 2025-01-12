<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    protected $table = "hewan";
    protected $fillable =
    [
        "nama_hewan",
        "jenis_hewan",
        "berat_hewan",
        "panjang_hewan",
        "deskripsi_hewan",
    ];
}

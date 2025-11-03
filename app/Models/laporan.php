<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Laporan;




class Mahasiswa extends Model
{
    use HasFactory;

    public function mahasiswa() {
    return $this->belongsTo(Mahasiswa::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Laporan;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama','nim','email'];

    public function laporans() {
        return $this->hasMany(Laporan::class);
    }
}
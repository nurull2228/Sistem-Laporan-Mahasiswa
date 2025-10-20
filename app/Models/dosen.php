<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Laporan;

class Dosen extends Model
{
    use HasFactory;

     protected $fillable = ['nama','nidn','email'];
     
     
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormManajer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'posisi',
        'hari',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'durasi',
        'pekerjaan',
        'status',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $filllable = [
        'nis',
        'nama_lengkap',
        'jenis_kelamin',
        'nisn',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // protected $table = 'siswa'; untuk misalkan salah nama di tabel
    protected $fillable = [
        'name',
        'age',
        'class',
        'address',
        'gender',
        'religion',
        'status'
    ];
}

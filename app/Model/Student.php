<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'email',
        'jenis_kelamin'
    ];
}

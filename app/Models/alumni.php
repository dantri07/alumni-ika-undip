<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumni extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'full_name',
        'nik',
        'asal_institusi',
        'phone',
        'email',
        'phone',
        'date_of_birth',
        'address',
        'id_kota',
        'status',
        'instansi_pendidikan',
        'username',
        'password',
    ];

    protected $table = 'alumni';
    protected $keyType = 'string';
    public    $incrementing = false;
    public    $timestamps  = false;
}

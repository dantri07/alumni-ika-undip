<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengalaman extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'pengalaman',
        'jabatan',
        'id_alumni',
        'start',
        'end',
        
    ];

    protected $table = 'pengalaman';
    protected $keyType = 'string';
    public    $incrementing = false;
    public    $timestamps  = false;
}

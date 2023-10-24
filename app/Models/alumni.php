<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumni extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'gender',
        'nim',
        'password',
    ];

    protected $table = 'murid';
    protected $keyType = 'string';
    public    $incrementing = false;
    public    $timestamps  = false;
}

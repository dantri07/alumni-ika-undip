<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name_kota',
        
    ];

    protected $table = 'kota';
    protected $keyType = 'string';
    public    $incrementing = false;
    public    $timestamps  = false;
}

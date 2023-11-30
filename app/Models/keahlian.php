<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keahlian extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'keahlian',
        'id_alumni',
        
    ];

    protected $table = 'keahlian';
    protected $keyType = 'string';
    public    $incrementing = false;
    public    $timestamps  = false;
}

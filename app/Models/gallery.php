<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'tanggal',
        'type',
        'images',
    ];

    protected $table = 'gallery';
    protected $keyType = 'string';
    public    $incrementing = false;
    public    $timestamps  = false;
}

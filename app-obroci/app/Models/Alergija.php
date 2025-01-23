<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alergija extends Model
{
    /** @use HasFactory<\Database\Factories\AlergijaFactory> */
    use HasFactory;

    protected $table = 'alergije';
    protected $fillable =
    [
        'korisnik_id',
        'namirnica_id'
    ];
}

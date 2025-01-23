<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korisnik_Preferencije extends Model
{
    /** @use HasFactory<\Database\Factories\KorisnikPreferencijeFactory> */
    use HasFactory;

    protected $table = 'korisnik_preferencije';
    protected $fillable =
    [
        'korisnik_id',
        'preferencija_id'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    protected $table = 'recepti';
    protected $fillable = [
        'naziv',
        'opis'
    ];
    use HasFactory;
    function obroci(){
        return $this->hasMany(Obrok::class);
    }
}

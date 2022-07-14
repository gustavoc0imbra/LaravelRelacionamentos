<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marca;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'marca_id',
        'ano',
        'combustivel'
    ];

    public function marca(){
        return $this->belongsTo[Marca::class];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    use HasFactory;
    protected $table = 'episodios';
    protected $fillable =[
        'numero',
        'temporada_id'
    ];
    public function temporadas()
    {
        return $this->belongsTo(Temporada::class);
    }
}

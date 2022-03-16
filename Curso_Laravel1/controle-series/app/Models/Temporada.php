<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Temporada extends Model
{
    use HasFactory;
    protected $table = 'temporadas';
    protected $fillable = [
        'serie_id',
        'numero'
    ];

    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
    public function getEpisodiosAssistidos():Collection
    {
        return $this->episodios->filter(function(Episodio $episodio){
            return $episodio->assistido;
        });
    }
}

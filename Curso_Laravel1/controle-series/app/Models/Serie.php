<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    //Informamos o nome da tabela que a Model deverá se relacionar
    protected $table = 'series';
    protected $fillable = [
        'nome',
        'numero'
    ];

    public function temporadas()
    {
        return $this->hasMany(Temporada::class);
    }
}

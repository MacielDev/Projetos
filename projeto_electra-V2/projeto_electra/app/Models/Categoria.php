<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table ='categoria';
    protected $fillable = [
        'nome',
        'imagem',
        'descricao'
    ];
    public function relCursos()
    {
        return $this->hasMany(Curso::class,'id_categoria','id_categoria');
    }

}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table='cursos';

    protected $fillable = [
        'nome_curso',
        'descricao_curso',
        'carga_horaria',
        'preco',
        'periodo',
        'categoria_id_fk',
        'user_id'
    ];
}

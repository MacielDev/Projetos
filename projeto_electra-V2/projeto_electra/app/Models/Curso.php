<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Curso extends Model
{
    use HasFactory;
    protected $table='curso';

    protected $fillable = [
        'nome_curso',
        'descricao_curso',
        'carga_horaria',
        'preco',
        'periodo',
        'id_categoria',
        'id_user'
    ];

    public function relUsers()
    {
        return $this->hasOne(User::class,'id','id_user');
    }
    public function relCategorias()
    {
      return $this->hasOne(Categoria::class,'id_categoria','id_categoria');
    }


}

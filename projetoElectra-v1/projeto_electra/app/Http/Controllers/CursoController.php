<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\User;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    private $objCurso;
    private $objUser;
    private $objCategoria;

    public function __construct()
    {
        $this->objCurso = new Curso();
        $this->objUser = new User();
        $this->objCategoria = new Categoria();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->objUser->all();
        $categorias = $this->objCategoria->all();

        return view('cursos.criarCursosFront',compact('users'),compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create(Request $request)
    {
        $cadastro = $this->objCurso->create([
            'nome_curso'=>$request->nome_curso,
            'descricao_curso'=>$request->descricao_curso,
            'carga_horaria'=>$request->carga_horaria,
            'preco'=>$request->preco,
            'periodo'=>$request->periodo,
            'categoria_id_fk'=>$request->categoria_id_fk,
            'user_id'=>$request->user_id
        ]);
        if($cadastro){
            return redirect()->route('front-end');
        }else{
            return back();
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        //
    }
}

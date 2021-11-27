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
    /*Retorna os usuários,categorias e cursos cadastrados para a montagem da visão de cursos*/
    public function index()
    {
        $cursos = $this->objCurso->all();
        $users = $this->objUser->all();
        $categorias = $this->objCategoria->all();
        return view('cursos.index',compact('cursos'),compact('users'), compact('categorias'));
    }

    //Formulario para a criação de novo curso
    public function create()
    {
        $cursos = $this->objCurso->all();
        $users = $this->objUser->all();
        $categorias = $this->objCategoria->all();
        return view('cursos.create', compact('users', 'categorias'), compact('categorias'));
    }

   /*Armazenamento das informações do curso por meio do formulário de criação
    de novo curso
   */
    public function store(Request $request)
    {
        $cadastro = $this->objCurso->create([
            'nome_curso' => $request->nome_curso,
            'descricao_curso' => $request->descricao_curso,
            'carga_horaria' => $request->carga_horaria,
            'preco' => $request->preco,
            'periodo' => $request->periodo,
            'id_categoria' => $request->id_categoria,
            'id_user' => $request->id_user
        ]);
        if ($cadastro) {
            return redirect()->route('apresentarCursos');
        } else {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //CODIGO
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
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
    public function destroy($id_curso)
    {

        $this->objCurso->destroy($id_curso);
        return redirect()->route('apresentarCursos');
    }
}

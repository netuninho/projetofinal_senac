<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Curso;

class CursoController extends Controller{

    public function index(){
        $objCurso = new Curso();
        $dados["lista"] = $objCurso -> lista();
        $dados["view"] = "Curso/index";

        $this -> load("template", $dados);
    }

    public function create(){
        $dados["view"] = "Curso/Create";
        
        $this -> load("template", $dados);
    }

    public function salvar(){
        $objCurso = new Curso();
        $curso = new \stdClass();
        $curso ->  curso = $_POST["curso"];
        $curso -> preco = $_POST["preco"];
        $curso -> horainicio = $_POST["horainicio"];
        $curso -> horafim = $_POST["horafim"];
        $curso -> duracao = $_POST["duracao"];
        $curso -> dias = $_POST["dias"];
        $curso -> idcurso = $_POST["idcurso"];

        if(!$curso -> idcurso){
            $objCurso -> inserir($curso);
        } else {
            $objCurso -> editar($curso);
        }

        header("location:".URL_BASE."curso");
    }

    public function edit($id)
   {
      $objCurso = new Curso();
      $dados["curso"] = $objCurso -> getCurso($id);
      $dados["view"] =  "Curso/Create";

      $this->load("template", $dados);
   }

    public function excluir($id){
        $objCurso = new Curso();
        $objCurso -> excluir($id);

        header("location:" .URL_BASE. "curso");
    }
}
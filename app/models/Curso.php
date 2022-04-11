<?php

namespace app\models;
use app\core\Model;

class Curso extends Model{

    public function lista(){
        $sql = "SELECT * FROM tblcurso";
        $qry = $this -> db -> query($sql);
        return $qry -> fetchAll(\PDO::FETCH_OBJ);
    }

    public function inserir($curso){
        $sql = "INSERT INTO tblcurso SET
        curso = :curso,
        preco = :preco,
        horainicio = :horainicio,
        horafim = :horafim,
        duracao = :duracao,
        dias = :dias";

        $qry = $this -> db -> prepare($sql);

        $qry -> bindValue(":curso", $curso -> curso);
        $qry -> bindValue(":preco", $curso -> preco);
        $qry -> bindValue(":horainicio", $curso -> horainicio);
        $qry -> bindValue(":horafim", $curso -> horafim);
        $qry -> bindValue("duracao", $curso -> duracao);
        $qry -> bindValue("dias", $curso -> dias);
        $qry -> execute();

        return $this -> db -> lastInsertId();
    }

    public function getCurso($id){
        $sql = "SELECT * FROM tblcurso WHERE idcurso = $id";
        $qry = $this -> db -> query($sql);
        return $qry -> fetch(\PDO::FETCH_OBJ);
    }

    public function editar($curso){
        $sql = "UPDATE tblcurso SET
        curso = :curso,
        preco = :preco,
        horainicio = :horainicio,
        horafim = :horafim,
        duracao = :duracao,
        dias = :dias
        WHERE idcurso = :id";

        $qry = $this -> db -> prepare($sql);

        $qry -> bindValue(":curso", $curso -> curso);
        $qry -> bindValue(":preco", $curso -> preco);
        $qry -> bindValue(":horainicio", $curso -> horainicio);
        $qry -> bindValue(":horafim", $curso -> horafim);
        $qry -> bindValue(":duracao", $curso -> duracao);
        $qry -> bindValue(":dias", $curso -> dias);
        $qry -> bindValue(":id", $curso -> idcurso);
        
        $qry -> execute();
        return $curso -> idcurso;
    }

    public function excluir($id){
        $sql = "DELETE FROM tblcurso WHERE idcurso = $id";
        $qry = $this -> db -> query($sql);
    }

}
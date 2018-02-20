<?php
/**
 * Created by PhpStorm.
 * User: 27834372874
 * Date: 19/02/2018
 * Time: 20:16
 */

namespace App\DAO;


class CursoDAO
{
    private $conexao;

    /**
     * CursoDAO constructor.
     */

    public function __construct()
    {
        $this->conexao = new \PDO("mysql : dbname=db_cursos;host=localhost", "root", "Suporte99");
        $this->conexao->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);

    }
    public function inserir($cursos)
    {
        $sql = "insert into cursos (nome, valor) VALUES  (:nome,:valor)";
        try{
            $insercao = $this->conexao->prepare($sql);
            $insercao->bindValue(':nome', $curso->getNome());
            $insercao->bindValue(':valor', $curso->getValor());
            $insercao->execute();

        }cath (\PDOException $erro){ echo $erro->getMessage();
        }
    }
}
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
        $this->conexao = new \PDO("mysql:dbname=db_cursos;host=localhost", "root", "Suporte99");
        $this->conexao->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);

    }
    public function inserir($curso)
    {
        $sql = "insert into cursos (nome, valor) VALUES  (:nome,:valor)";
        try{
            $insercao = $this->conexao->prepare($sql);
            $insercao->bindValue(':nome', $curso->getNome());
            $insercao->bindValue(':valor', $curso->getValor());
            $insercao->execute();
            return true;

        } catch (\PDOException $erro){
            echo $erro->getMessage();
            return false;
        }

    }

    /**
     * @return \PDO
     */
    public function pesquisar($curso)
    {
        $sql = "select * from cursos where nome like :nome";
        try{
            $pesquisa = $this->conexao->prepare($sql);
            $pesquisa->bindValue(":nome", "%" .$curso->getNome()."%");
            $pesquisa->execute();
            $resultado = $pesquisa->fetchAll();
            $cursos = [];
            foreach ($resultado as $item){
                $curso = new \App\Model\Curso();
                $curso->setId($item['id']);
                $curso->setNome($item['nome']);
                $curso->setValor($item['valor']);
                $cursos[] = $curso;
            }
            return $cursos;

        } catch (\PDOException $erro){
            echo $erro->getMessage();
        }
    }
}
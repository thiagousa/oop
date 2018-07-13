<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 7/12/18
 * Time: 11:04 PM
 */

require 'Pessoa.php';

class Aluno extends Pessoa
{
private $matricula;
private $curso;

public function cancelarMatricula(){

    $this->setMatricula(false);

}

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * @param mixed $curso
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
}
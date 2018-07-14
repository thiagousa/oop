<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 7/12/18
 * Time: 11:04 PM
 */

include_once 'Pessoa.php';

class Professor extends Pessoa
{
    private $especialidade;
    private $salario;

    public function receberSalario($v){

        $this->setSalario($this->getSalario() + $v);



    }

    /**
     * @return mixed
     */
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * @param mixed $especialidade
     */
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }


}
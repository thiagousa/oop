<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 7/12/18
 * Time: 11:05 PM
 */

namespace app\classes;



class Funcionario extends Pessoa
{

    private $setor;
    private $trabalhando;

    public function mudarTrabalho(){

    echo    'Mudar trabalho';
    }


    /**
     * @return mixed
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * @param mixed $setor
     */
    public function setSetor($setor)
    {
        $this->setor = $setor;
    }

    /**
     * @return mixed
     */
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    /**
     * @param mixed $trabalhando
     */
    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;
    }



}
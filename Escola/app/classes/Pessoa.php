<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 7/12/18
 * Time: 11:04 PM
 */
namespace app\classes;

class Pessoa
{

    private $nome;
    private $idade;
    private $sexo;

    public function fazerAniversario(){

        $this->setIdade($this->getIdade() + 1);

        echo '<p> Fez o(a)'.$this->getNome().'fez Aniversario sua novas idade e'.$this->getIdade().' </p>';

    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

}
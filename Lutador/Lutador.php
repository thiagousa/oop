<?php

require  'Padrao.php';

Class Lutador implements Padrao {

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    /**
     * Lutador constructor.
     * @param $nome
     * @param $nacionalidade
     * @param $idade
     * @param $altura
     * @param $peso
     * @param $vitorias
     * @param $derrotas
     * @param $empates
     */
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    /**
     * Lutador constructor.
     */


    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * @param string $nacionalidade
     */
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    /**
     * @return string
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param string $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return string
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param string $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        $this->setCategoria();


    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    private function setCategoria()


    {

        if($this->peso < 52.2){
            echo'Invalido';
        }
        elseif ($this->peso <= 70.3){

            $this->categoria= 'Leve';

        }
        elseif ($this->peso <= 83.9){

            $this->categoria= 'Medio';

        }
        elseif ($this->peso <= 120.2){

            $this->categoria = 'Pesado';

        }
        else{
            echo'Invalido';


        }

    }

    /**
     * @return string
     */
    public function getVitorias()
    {
        return $this->vitorias;
    }

    /**
     * @param string $vitorias
     */
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    /**
     * @return string
     */
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    /**
     * @param string $derrotas
     */
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    /**
     * @return string
     */
    public function getEmpates()
    {
        return $this->empates;
    }

    /**
     * @param string $empates
     */
    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }





    public function apresentar()

    {

        echo '<p> ------ Apresentacao ---- </p>';
        echo '<p>Lutador:'.$this->getNome().'</p>';
        echo '<p>Origem:'.$this->getNacionalidade().'</p>';
        echo '<p>Idade:'.$this->getIdade().'</p>';
        echo '<p>Pesando:'.$this->getPeso().'</p>';
        echo '<p>Categoria:'.$this->categoria.'</p>';
        echo '<p>Ganhou:'.$this->getVitorias().'</p>';
        echo '<p>Perdeu:'.$this->getDerrotas().'</p>';
        echo '<p>Empatou:'.$this->getEmpates().'</p>';


    }

    public function status()
    {
        echo '<p> ------ Status ---- </p>';
        echo '<p>Lutador:'.$this->getNome().'</p>';
        echo '<p>Pesando:'.$this->getPeso().'E sua Categoria e '.$this->getCategoria().'</p>';
        echo '<p>Ganhou:'.$this->getVitorias().'</p>';
        echo '<p>Perdeu:'.$this->getDerrotas().'</p>';
        echo '<p>Empatou:'.$this->getEmpates().'</p>';
    }

    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta()
    {
       $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
}
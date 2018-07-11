<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 7/10/18
 * Time: 10:12 PM
 */

require  'Lutador.php';

class Luta
{

    private $desafado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    /**
     * Luta constructor.
     * @param $desafado
     * @param $desafiante
     * @param $rounds
     * @param $aprovada
     */
    public function __construct($desafado, $desafiante, $rounds, $aprovada)
    {
        $this->desafado = $desafado;
        $this->desafiante = $desafiante;
        $this->rounds = $rounds;
        $this->aprovada = $aprovada;
    }


    public function marcarLuta(Lutador $l1 , Lutador $l2){

        if($l1->$this->categoria == $l2->$this->categoria && $l1<>$l2){

            $this->aprovada = true;
            $this->desafado = $l1;
            $this->desafiante = $l2;

            echo 'luta aprovada';
        }

        else {

            $this->aprovada = false;
            $this->desafado =  null;
            $this->desafiante = null;

            echo 'luta nao aprovada';




        }

    }

    public function lutar($luta){

        if($this->aprovada()){

            $l1->


        }

        elseif (){


        }

    }

    /**
     * @return mixed
     */
    public function getDesafado()
    {
        return $this->desafado;
    }

    /**
     * @param mixed $desafado
     */
    public function setDesafado($desafado)
    {
        $this->desafado = $desafado;
    }

    /**
     * @return mixed
     */
    public function getDesafiante()
    {
        return $this->desafiante;
    }

    /**
     * @param mixed $desafiante
     */
    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }

    /**
     * @return mixed
     */
    public function getRounds()
    {
        return $this->rounds;
    }

    /**
     * @param mixed $rounds
     */
    public function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }

    /**
     * @return mixed
     */
    public function getAprovada()
    {
        return $this->aprovada;
    }

    /**
     * @param mixed $aprovada
     */
    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }















}
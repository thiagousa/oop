<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 7/10/18
 * Time: 10:12 PM
 */

require_once 'Lutador.php';

class Luta
{

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;




    public function marcarLuta($l1, $l2)
    {

        if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {

            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;

            echo 'luta aprovada';
        } else {

            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;

            echo 'luta nao aprovada';


        }

    }

    public function lutar()
    {

        if ($this->getAprovada()) {

            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);

            switch ($vencedor){
                case 0:  //empate

                    echo 'empate';
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();


                    break;

                case 1: //Desafiante vence
                    echo "<p>".$this->desafiado->getNome()." Venceu!</p>";
                    $this->desafiante->perderLuta();
                    $this->desafiado->ganharLuta();

                    break;


                  case 2: //desafiado vence
                      echo "<p>".$this->desfiante->getNome()." Venceu!</p>";
                      $this->desafiante->ganharLuta();
                      $this->desafiado->perderLuta();


                    break;
            }
        }
        else{


        }
    }


    public function getDesafiado()
    {
        return $this->desafiado;
    }

    /**
     * @param mixed $desafado
     */
    public function setDesafiado($desafiado)
    {
        $this->desafado = $desafiado;
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
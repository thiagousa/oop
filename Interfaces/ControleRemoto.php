<?php

require_once 'Controlador.php';

Class ControleRemoto implements Controlador {

private $volume;
private $ligado;
private $tocando;


public function __construct(){

    $this->volume = 50;
    $this->ligado = false;
    $this->tocando = false;


}

    /**
     * @return int
     */
    private function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param int $volume
     */
    private function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * @return bool
     */
    private function getLigado()
    {
        return $this->ligado;
    }

    /**
     * @param bool $ligado
     */
    private function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    /**
     * @return bool
     */
    private function getTocando()
    {
        return $this->tocando;
    }

    /**
     * @param bool $tocando
     */
    private function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }


    public function ligar()
    {
        $this->setLigado(true);
    }

    public function desligar()
    {
        $this->setLigado(false);
    }

    public function abrirMenu()


    {
        echo'<p> <----------MENU----------></p>';
        echo "<br>Esta ligado?:".($this->getLigado()?'Sim':'Nao');
        echo "<br>Esta tocando?:".($this->getTocando()?'Sim':'Nao');
        echo "<br>Volume:" . $this->getVolume();
        for($i=0; $i<=$this->getVolume(); $i+=10){

            echo '|';

        }

        echo "<br>";
    }

    public function fecharMenu()
    {
        echo "<br>Fechando Menu...<br>";
    }

    public function maisVolume()

    {
       if($this->getLigado()){

           $this->setVolume($this->getVolume() + 5);

       }
    }

    public function menosVolume()
    {
        if($this->getLigado()){

            $this->setVolume($this->getVolume() - 5);

       }
    }

    public function ligarMudo()
    {
    if ($this->getLigado() && $this->getVolume()>0){
        $this->setVolume(0);

    }


    }


    public function desligarMudo()
    {
        if ($this->getLigado()&& $this->getVolume()==0){
            $this->setVolume(50);
        }

    }

    public function play()
    {
        if ($this->getLigado()&& !($this->getTocando())){

            $this->setTocando(true);

        }
    }

    public function pause()
    {
        if ($this->getTocando()&& $this->getTocando()){

            $this->setTocando(false);
        }
    }
}
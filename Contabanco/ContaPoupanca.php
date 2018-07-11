<?php

require 'Conta.php';

class ContaPoupanca implements Conta
{
    private $numConta;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->saldo = 0;
        $this->status = true;
        $this->tipo = 'CP';
        echo '<p>Conta Poupanca Criada com Sucesso</p>';
    }

    public function abrirConta(){

        $this->setStatus(true);
        $this->setSaldo(50);

    }






    public function fecharConta(){

        if ($this->getSaldo() > 0) {
            echo " <p> Conta ainda tem dinheiro nao pode ser fechada </p>";
        }


        elseif ($this->getSaldo() < 0) {

            echo "<p> Conta esta com debitos nao pode ser fechada</p>";

        }



        else {
            $this->setStatus(false);

            echo "<p> Conta do  {$this->getDono()}  Fechada !!!</p>";



        }

    }


    public function depositar($v){

        if($this->isStatus() && $this->getSaldo()){
            echo "<p> <----------------------- Deposito -------------------------------></p>";

            echo "<p> Valor Atual da Conta {$this->getSaldo()} </p>";
            echo "<p> <----------------------- Depositando .... -------------------------------></p>";

            $this->setSaldo($this->getSaldo() + $v);
            echo "<p> Valor depositado de {$v} na conta de {$this->getDono()} novo Saldo e {$this->getSaldo()}</p>";
        }

        else{

            echo 'Conta Fechada Impossivel Depositar!';
        }

    }
    public function sacar($v){

        if( $this->isStatus() && $this->getSaldo()>= $v){

            $this->setSaldo($this->getSaldo() - $v);
            echo "<p> <----------------------- Saque -------------------------------></p>";

            echo "<p> Valor Atual da Conta {$this->getSaldo()} </p>";
            echo "<p> <---------------------------Sacando..... ----------------------------></p>";
            echo "<p> Valor sacado de {$v} na conta de {$this->getDono()} novo Saldo e {$this->getSaldo()}</p>";
        }
        elseif ($this->isStatus() && $this->getSaldo()<= $v){

            echo "<p> Valor do saque de {$v} na conta valor na Conta {$this->getSaldo()} de {$this->getDono()} - Impossivel realizar o saque! </p>";

        }


        else{

            echo 'Conta com saldo menor que o Saque!';
        }

    }


    public function pagarMensal(){

        if($this->isStatus() && $this->getSaldo()>= 6){
            echo "<p> <----------------------- Mensalidade -------------------------------></p>";
            echo "<p> Valor Atual da Conta {$this->getSaldo()} </p>";

            echo "<p> <----------------------- Retirando.... -------------------------------></p>";

            echo "<p> Valor da mensalidade sacada na conta de {$this->getDono()} novo Saldo e {$this->getSaldo()}</p>";

        }

        elseif($this->isStatus() && $this->getSaldo()< 6){


            echo "<p> Valor da conta menor 6 que o da mensalidade , Impossivel realizar a operacao de Mensalidade </p>";


        }

        else{
            echo "Conta Fechada ";
        }


    }

    public function addNumero($n)
    {
        if($this->isStatus()){


            $this->setNumConta($n.'CC');
        }

        else{

            echo "Conta Fechada ";

        }
    }

    public function addDono($d)
    {
        if($this->isStatus()){

            $this->setDono($d);
        }
    }


    /**
     * @return mixed
     */
    private function getNumConta()
    {
        return $this->numConta;
    }

    /**
     * @param mixed $numConta
     */
    private  function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    /**
     * @return string
     */
    private  function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param string $tipo
     */
    private  function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    private  function getDono()
    {
        return $this->dono;
    }

    /**
     * @param mixed $dono
     */
    private  function setDono($dono)
    {
        $this->dono = $dono;
    }

    /**
     * @return int
     */
    private  function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * @param int $saldo
     */
    private  function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    /**
     * @return bool
     */
    private function isStatus()
    {
        return $this->status;
    }

    /**
     * @param bool $status
     */
    private function setStatus($status)
    {
        $this->status = $status;
    }





}

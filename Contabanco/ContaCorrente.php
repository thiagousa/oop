<?php
require 'Conta.php';
class ContaCorrente implements Conta
{
    public $numConta;
    public $tipo;
    private $dono;
    private $saldo;
    private $status;


    public function __construct()
    {
        $this->saldo = 0;
        $this->status = true;
        $this->tipo = 'CC';
        echo '<p>Conta Corrente Criada com Sucesso</p>';
    }

    public function abrirConta(){
        $this->setStatus(true);
        $this->setSaldo(150);
         
        }
    
  
    
    
     
    
    public function fecharConta(){
        echo 'Fechar Conta';

    }
    public function depositar(){
        echo 'Depositar Conta';

    }
    public function sacar(){
        echo 'Sacar Conta';

    }
    public function pagarMensal(){
        echo 'Pagar Conta';


    }
    
    
    public function setnumConta($numConta){
    
        $this->numConta = $numConta;
    
    
    }
    
    public function getnumConta(){
    
        return $this->conta;
    
    }
    
    public function setTipo($tipo){
    
        $this->tipo = $tipo;
    
    
    }
    
    public function getTipo(){
    
        return $this->tipo;
    
    }
    
    public function setDono($dono){
    
        $this->dono = $dono;
    
    
    }
    
    public function getDono(){
    
        return $this->dono;
    
    }
    
    public function setSaldo($saldo){
    
        $this->saldo = $saldo;
    
    
    }
    
    public function getSaldo(){
    
        return $this->saldo;
    
    }
    
    public function setStatus($status){
    
        $this->status = $status;
    
    
    }
    
    public function getStatus(){
    
        return $this->status;
    
    }
    
    
    

}

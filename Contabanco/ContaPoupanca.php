<?php

require 'Conta.php';

class ContaPoupanca implements Conta
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
        $this->tipo = 'CP';
        echo '<p>Conta Poupança Criada com Sucesso</p>';
    }

    public function abrirConta(){
     
     
     $this->setSaldo(150);
    
        
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
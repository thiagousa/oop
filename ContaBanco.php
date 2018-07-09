<?php

Class ContaBanco{

public $numConta;
protected $tipo;
private $dono;
private $saldo;
private $status;


public function __construct
(){


    $this->saldo = 0;
    $this->status = true;
echo '<p>Conta Criada com Sucesso</p>';


}


public function abrirConta($t){

    $this->setTipo($t);
    $this->setStatus(true);

    if($t =='CC')
    
    {

       $this->setSaldo(50);

        

    }
    elseif ($t == 'CP' ){
     
        $this->setSaldo(150);




    }

    else{

        echo 'Tipo de Conta Inexistente' ;
    }



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
public function  depositar($valor){

    if ($this->getStatus()) {

        $this->setSaldo($this->getSaldo()+$valor);
     echo "<p> Valor depositado de {$valor} na conta de {$this->getDono()} </p>";

    }

    else{

        echo 'Conta fechada nao posso depositar';
    }


}
public function sacar($valor){

    if ($this->getStatus()) {

        if ($this->getSaldo() >= $valor) {

            $this->setSaldo($this->getSaldo() - $valor);

            echo "<p> Valor sacado de {$valor} na conta de {$this->getDono()} </p>";
            
        

        } else {
            echo 'Valor maior que o Saldo';
        }
        
        # code...
    } else {
        echo 'Nao posso Sacar de uma conta fechada';
        # code...
    }
    



}
public function pagarMensalidade(){

    if ($this->getTipo() == 'CC') {
        $valor = 12;
    } else if($this->getTipo() == 'CP') {
        $valor = 20;
    } 
    if ($this->getStatus()){

        $this->setSaldo($this->getSaldo() - $valor);

        echo "<p> Valor da mensalidade cobrada no {$valor} na conta de {$this->getDono()} </p>";
    }
      
    else {
        echo 'Something Wrog!!! ';
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
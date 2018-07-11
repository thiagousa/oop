<?php

interface Conta{

    public function abrirConta();
    public function fecharConta();
    public function depositar($v);
    public function sacar($v);
    public function pagarMensal();
    public function addNumero($n);
    public function addDono($d);


}
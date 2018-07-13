<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<!--
*        Sample comment
-->
<HTML>
<head>
    <title>PhpStorm</title>
</head>
<body>
<pre>
<?php

include_once 'Aluno.php';
include_once 'Professor.php';
include_once  'Funcionario.php';

$a = new Aluno();
$p = new Professor();
$f = new Funcionario();

$a->setNome('Jose Sem Classe');
$p->setNome('Joao Professor');
$f->setNome('Maria Lavadora');


print_r($a);
print_r($p);
print_r($f);


?>
    </pre>
</body>
</html>


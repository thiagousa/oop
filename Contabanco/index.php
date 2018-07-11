<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>
    <pre>
    <?php
     //require 'ContaCorrente.php';
     require 'ContaPoupanca.php';

    // $p1 = new ContaCorrente; // Jose
     $p2 = new ContaPoupanca;  // Maria

    /* $p1->abrirConta();
     $p1->addDono('Jose');
     $p1->addNumero(111111);
     $p1->depositar(200);
     $p1->pagarMensal();
     $p1->sacar(350);
     $p1->fecharConta(); */

    $p2->abrirConta();
    $p2->addDono('Maria');
    $p2->addNumero(22222222);
    $p2->depositar(500);
    $p2->pagarMensal();
    $p2->sacar(650);
    $p2->pagarMensal();
    $p2->fecharConta();



     //print_r($p1);

     print_r($p2);

 






          
    ?>
    </pre>
    </h1>

</body>
</html>
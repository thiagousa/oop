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

    // $p1 = new ContaCorrente; // Jubeliu
     $p2 = new ContaPoupanca;  // Creuza

     var_dump($p2);die();


    $p1->setnumConta(11111);
    $p1->setDono('Jubileu');
    $p1->depositar(300);


     
     $p2->setnumConta(22222);
     $p2->setDono('Creuza');
     $p2->depositar(500);
     $p2->sacar(100);

     $p1->pagarMensalidade();
     $p2->pagarMensalidade();

     $p1->sacar(338);
     $p2->sacar(530);

     $p1->fecharConta();
     $p2->fecharConta();





     print_r($p1);

     print_r($p2);

 






          
    ?>
    </pre>
    </h1>

</body>
</html>
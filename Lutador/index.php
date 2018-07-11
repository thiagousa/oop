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

require_once  'Lutador.php';

$l = array();

$l[0] = new Lutador('Joao', 'Brasileiro',30,1.78,90.9,1,2,3);
$l[1] = new Lutador('Jose', 'Frances',29,1.68,57.9,1,2,3);
$l[2] = new Lutador('Pedro', 'Japones',35,1.98,80.9,1,2,3);
$l[3] = new Lutador('Lucas', 'Russo',28,1.58,81.9,1,2,3);
$l[4] = new Lutador('Terry', 'Chines',37,1.98,119.9,1,2,3);
$l[5] = new Lutador('Bill', 'Americano',30,2.18,105.9,1,2,3);

$l[0]->apresentar();


$l[0]->status();


?>
    </pre>
</body>
</html>
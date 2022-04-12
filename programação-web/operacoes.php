<!DOCTYPE html> 
<html> 
    <head>
        <meta charset="utf-8">
</head>
<body>
    <h3>Faça um programa que calcule a soma, subtração, multiplicacão e divisão de 2 números, dependendo da escolha do usúario.</h3>
    <form action="operacoes.php" method="GET">
        Numero 1 <input type="number" name="num1">
        Numero 2 <input type="number" name="num2">
        <br><br>Operador (1 = divisão, 2 = multiplicacão, 3 = soma, 4 = subtração)<input type="number" name="op">
        <button type="submit">Enviar</button>
    <?php
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $op = $_REQUEST['op'];

    $divisao = $num1 / $num2;
    $multiplicacao = $num1 * $num2;
    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;

        if ($op == 1) {
            print "O resultado da divisão é ". $divisao;
        } elseif ($op == 2) {
            print "O resultado da multiplicação é ". $multiplicacao;
        } elseif ($op == 3) {
            print "O resultado da soma é ". $soma;
        } elseif ($op ==4) {
            print "O resultado da subtração é ". $subtracao;
        } else {
            print "Operador invalido";
        }   
    ?>
</body>
</html>
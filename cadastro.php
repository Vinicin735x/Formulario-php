<?php

    include "funcao.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $nascimento = $_POST["nascimento"];

    $nascimento_corrigido = implode('/', array_reverse(explode('-', $nascimento)));

    $idade = calcularIdade($nascimento);

    $anoAtual = date("Y");
    $mesAtual = date("m");
    $diaAtual = date("d");

    echo "<html>";
    echo"<head>";
    echo"<link rel='stylesheet' href='estilo.css'>";
    echo"</head>";
    echo"<body>";
    echo"<div class='principal'>";
    echo"Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Data de Nascimento: $nascimento_corrigido <br>";
    echo "Idade: $idade <br>";
    echo "<p><a href='index.html'> Clique aqui</a> para retornar</p>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
?>    
<?php

    require_once "Config.php";

    //utilizando esse comando abaixo a o $cad criado refere-se à classe Cadastro no namespace Cliente
    // caso contrário iria herdar de Cadastro (geral), na raiz. Utilizando o segundo echo comentado abaixo
    use Cliente\Cadastro;

    $cad = new Cadastro();
    $cad->setNome("Ricardo");
    $cad->setEmail("rcr109@gmail.com");
    $cad->setSenha("1234");
    $cad->registraVenda();
    //echo $cad;

?>
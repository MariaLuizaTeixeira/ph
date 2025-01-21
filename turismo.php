<?php

function Menu($participacao)
{
    print("********** MENU **********\n");
    print("Seja bem vinda(o) às atrações turísticas de Foz do Iguaçu! Deseja conhecer a cidade?");
    $participacao = readline("[1] Sim \n [2] Não");

    if ($participacao == 1)
    {
        escolhas();
    }

}

function passeios($adultos, $lugares)
{
    passeios = ["nome" => cataratas, "valor" => "50"];
    ["nome" => itaipu, "valor" => 40];
    ["nome" => "pq", "valor" => "30"];
    ["nome" => "marco", "valor" => "20"]

    print("********** PASSEIOS **********");
    print("Cataratas - R$50,00 [1]");
    print("Itaipu - R$40,00 [2]");
    print("Parque das Aves - R$30,00 [3]");
    print("Marco das Três Fronteiras - R$20,00 [4]");//12 - nao paga

    print("Insira o número do lugar que deseja visitar:");

    foreach($passeio as $lugar)
    {

    }

    $adultos = readline("Quantos adultos participarão?");

}
<?php
header("Access-Control-Allow-Origin: * ");//PERMITIR ACESSO DE REQUISICOES DE TODOS E QUALQUER SITE!
header("Access-Control-Allow-methods: GET, POST, PUT, DELETE, OPTIONS"); //GET:feito para pegar informacoes, POST:para inserir!, OPTIONS : acontece ate mesmo antes do usuario saber!
header("Content-Type: application/json");//AFIRMEI QUE TODO TIPO DE RETORNO SERA FEITO EM JSON
echo json_encode($array);
exit;
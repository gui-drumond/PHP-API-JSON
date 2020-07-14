<?php 

require('../banco/config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method==='get')
{
    $sql = $pdo ->query("SELECT * FROM notes");
    if($sql->rowCount() > 0)
    {   //data esta recebendo os dados vindo da variavel sql que faz a requisicao no banco
        // e volta trazendo todos os valores devido o uso do fetchall, apos isso usa 
        // PDO::FETCH_ASSOC para retirar caracteres especiais do vindo com as informacoes
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($data as $item)
        {   
            $array['error']= false;
            $array['result'][] = [
                'id'=>$item['id'],
                'title'=> $item['title'],
                'body'=> $item['body']
            ];

        }
    }
}
else{
    $array['error'] = ['true','NO PERMISSION! (JUST get)'];
}


require('return.php');

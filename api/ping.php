<?php 
// TODA API RETORNA UM JSON
//         SEMPRE!
require('../banco/config.php'); // BANCO DE DADOS 
$array = [];//DECLARA UM VETOR
$array['result'] = ['pong'=> true] ; //ADICIONA UM VALOR NO VETOR, QUE SERA MOSTRADO

require('./return.php');
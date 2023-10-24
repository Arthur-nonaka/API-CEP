<?php
    $cep = $_POST['cep'];

    //Local de consumo de API
    $url = "https://viacep.com.br/ws/".$cep."/json/";
    $ch = curl_init($url); //Inicializa o Curl na URL
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = json_decode(curl_exec($ch));
?>
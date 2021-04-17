<?php

    require_once '../vendor/autoload.php';

    // qualquer requisição que chegar nessa página o htaccess irá colocar no parâmetro 'url'
     
     if(isset($_GET['url'])){
        $url = explode('/', $_GET['url']);

        if($url[0] === 'api'){
            echo 'aoi';
        }
     }
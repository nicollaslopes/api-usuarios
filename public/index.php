<?php

    require_once '../vendor/autoload.php';

    // qualquer requisição que chegar nessa página o htaccess irá colocar no parâmetro 'url'
     
     if(isset($_GET['url'])){
        $url = explode('/', $_GET['url']);

        if($url[0] === 'api'){

            array_shift($url);

            $service = 'App\Controller\\'.ucfirst($url[0].'Controller'); 

            array_shift($url);

            $method = strtolower($_SERVER['REQUEST_METHOD']);

            try{
                $response = call_user_func_array(array(new $service, $method), $url);
                echo json_encode(['status' => 'success', 'data' => $response]);
                exit;
            } catch(Exception $e){
                echo json_encode(['status' => 'error', 'data' => $e->getMessage()], JSON_UNESCAPED_UNICODE);
                exit;
                
            }
        }
     }
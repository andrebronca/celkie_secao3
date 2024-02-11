<?php

namespace Core;

class ConfigController{

    private string $url;

    public function __construct()
    {
        echo "carregando configcontroller <br>";
        //'url' é o que foi definida no .htaccess
        $filter = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
        if(!empty($filter)){
            $this->url = $filter;
            var_dump($this->url);
            /* testando a captura da query string
            http://localhost/celke_secao3/artigos/index?situacao=1&origem=email
            $situacao = filter_input(INPUT_GET, 'situacao', FILTER_DEFAULT);
            $origem = filter_input(INPUT_GET, 'origem', FILTER_DEFAULT);
            var_dump($situacao);
            var_dump($origem);
            */
        } else {
            echo "Acessando a página inicial <br>";
        }
    }
}
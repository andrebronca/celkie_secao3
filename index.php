<?php
    //criar uma constante que define que o usuário está acessando o site a partir da página 'index.php'
    //limitar o acesso direto aos arquivos.
    define('7F67D6E',true);

    //carregando o composer
    require './vendor/autoload.php';
    //instanciar a controller que trata a url e abre a classe específica
    $url = new Core\ConfigController();
    $url->loadPage();


<?php
    //carregando o composer
    require './vendor/autoload.php';
    //instanciar a controller que trata a url e abre a classe específica
    $url = new Core\ConfigController();
    $url->loadPage();


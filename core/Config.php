<?php
namespace Core;

if(!defined('7F67D6E')){
    //redireciona para a raiz
    //header("Location: /celke_secao3/");
    die("Página não encontrada!");
}

abstract class Config {
    protected function config(): void {
        //url do projeto
        define('URL','http://localhost/celke_secao3/');
        define('URL_ADM','http://localhost/celke_secao3/adm/');
        //controllers
        define('CONTROLLER_HOME','Home');
        define('CONTROLLER_ERRO','Erro');

        //credenciais do banco de dados

        define('EMAIL_ADM','bronca.andre@gmail.com');
    }
}
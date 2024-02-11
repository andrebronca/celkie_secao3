<?php

namespace Core;

if(!defined('7F67D6E')){
    //redireciona para a raiz
    //header("Location: /celke_secao3/");
    die("Página não encontrada!");
}

class ConfigController extends Config{

    private string $url;
    private array $urlArray;
    private string $urlController;
    private string $urlParametro;
    private string $urlSlugController;
    private array $format;

    public function __construct()
    {
        $this->config();    //instanciar o método para carregar as constantes
        //'url' é o que foi definida no .htaccess
        $filter = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
        if(!empty($filter)){
            $this->url = $filter;

            //tratar a url
            $this->clearUrl();

            $this->urlArray = explode("/", $this->url);
            if(isset($this->urlArray[0])){
                $this->urlController = $this->slugController($this->urlArray[0]);  //obtendo o nome da controller
            } else {    //se não for enviado nada, acessar a página inicial
                $this->urlController = $this->slugController( CONTROLLER_ERRO );
            }
        } else {
            $this->urlController = $this->slugController( CONTROLLER_HOME );
        }
    }

    public function loadPage(): void {
        //para carregar a controller no Windows
        $classLoad = "Controller\\". $this->urlController;
        $classPage = new $classLoad();
        $classPage->index();
    }

    private function slugController(string $slugController): string {
        //converter tudo para minúsculo
        $this->urlSlugController = strtolower($slugController);
        //converter o traço para espaço
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        //converter a primeira letra de cada palavra para maiúsculo
        $this->urlSlugController = ucwords($this->urlSlugController);
        //remover o espaço em branco
        $this->urlSlugController = str_replace(" ","", $this->urlSlugController);

        return $this->urlSlugController;
    }

    private function clearUrl(): void {
        //eliminar tag html
        $this->url = strip_tags($this->url);
        //eliminar os espaços em branco
        $this->url = trim($this->url);
        //eliminar a barra no final da url
        $this->url = rtrim($this->url, "/");
        //eliminar caracteres especiais, que devem ser substituídos
        //'a' lista do que for digitado, substitui pela lista 'b'
        $this->format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýþÿ"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        $this->format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyby-------------------------------------------------------------------------------------------------';
        //utf8_decode está depreciada
        //$this->url = strtr(utf8_decode($this->url), utf8_decode($this->format['a']), $this->format['b']);
        $this->url = strtr(
                mb_convert_encoding($this->url, 'UTF-8', mb_detect_encoding($this->url)),
                mb_convert_encoding($this->format['a'], 'UTF-8', mb_detect_encoding($this->format['a'])), 
                $this->format['b']
            );
    }
}
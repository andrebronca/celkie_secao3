<?php
namespace Controller;

if(!defined('7F67D6E')){
    //redireciona para a raiz
    //header("Location: /celke_secao3/");
    die("Página não encontrada!");
}

class Erro{
    private string $pathView = "sts/Views/erro/erro";
    private array|string|null $data;

    public function index(){
        $this->data = null;
        $loadView = new \Core\ConfigView($this->pathView, $this->data);
        $loadView->loadPageView();
    }
}
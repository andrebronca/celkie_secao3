<?php
namespace Controller;

if(!defined('7F67D6E')){
    //redireciona para a raiz
    //header("Location: /celke_secao3/");
    die("Página não encontrada!");
}

class Home{
    private string $pathView = "sts/Views/home/home";
    private array|string|null $data;

    public function index(){
        $this->data = null;
        $loadView = new \Core\ConfigView($this->pathView, $this->data);
        $loadView->loadPageView();
    }
}
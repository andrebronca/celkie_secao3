<?php
namespace Controller;

if(!defined('7F67D6E')){
    //redireciona para a raiz
    //header("Location: /celke_secao3/");
    die("Página não encontrada!");
}

class SobreEmpresa{
    private string $pathView = "sts/Views/sobre/empresa";
    private array|string|null $data;

    public function index(){
        $this->data = [];
        $loadView = new \Core\ConfigView($this->pathView, $this->data);
        $loadView->loadPageView();
    }
}
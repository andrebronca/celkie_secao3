<?php
namespace Controller;

class Erro{
    private string $pathView = "sts/Views/erro/erro";
    private array|string|null $data;

    public function index(){
        $this->data = null;
        $loadView = new \Core\ConfigView($this->pathView, $this->data);
        $loadView->loadPageView();
    }
}
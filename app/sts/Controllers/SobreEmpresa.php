<?php
namespace Controller;

class SobreEmpresa{
    private string $pathView = "sts/Views/sobre/empresa";
    private array|string|null $data;

    public function index(){
        $this->data = [];
        $loadView = new \Core\ConfigView($this->pathView, $this->data);
        $loadView->loadPageView();
    }
}
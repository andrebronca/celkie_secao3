<?php
namespace Controller;

class Home{
    private string $pathView = "sts/Views/home/home";
    private array|string|null $data;

    public function index(){
        $this->data = null;
        $loadView = new \Core\ConfigView($this->pathView, $this->data);
        $loadView->loadPageView();
    }
}
<?php
namespace Controller;

class Contato{
    private string $pathView = "sts/Views/contato/contato";
    //configurando mais de um tipo de dados para uma variável, utiliza-se: '|'
    //multiplos tipos também podem ser atribuidos para retorno de métodos
    private array|null|string $data;

    public function index(){
        $this->data = "Mensagem enviada com sucesso";
        $loadView = new \Core\ConfigView($this->pathView, $this->data);
        $loadView->loadPageView();
    }
}
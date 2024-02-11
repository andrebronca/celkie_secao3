<?php
namespace Models;

if(!defined('7F67D6E')){
    //redireciona para a raiz
    //header("Location: /celke_secao3/");
    die("Página não encontrada!");
}

class StsHome {
    private array $data;

    public function index(): array {
        $this->data = [
            "title" => "Topo da página",
            "descrição" => "Descrição do serviço"
        ];

        return $this->data;
    }
}
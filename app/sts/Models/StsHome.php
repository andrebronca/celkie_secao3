<?php
namespace Models;

use Models\helper\StsConn;

if(!defined('7F67D6E')){
    //redireciona para a raiz
    //header("Location: /celke_secao3/");
    die("Página não encontrada!");
}

class StsHome {
    private array $data;
    private object $connection;

    public function index(): array {
        $conn = new StsConn();
        $this->connection = $conn->connectDb();

        var_dump($this->connection);

        $this->data = [
            "title" => "Topo da página",
            "descrição" => "Descrição do serviço"
        ];

        return $this->data;
    }
}
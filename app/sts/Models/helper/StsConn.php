<?php
namespace Models\helper;

use PDO;
use PDOException;

if(!defined('7F67D6E')){ die("Página não encontrada!"); }

class StsConn {
    private string $host = DB_HOST;
    private string $user = DB_USER;
    private string $pass = DB_PASS;
    private string $dbname = DB_DBNAME;
    private int|string $port = DB_PORT;
    private object $connect;

    public function connectDb(): object{
        try {
            $url_conn = "mysql:host{$this->host};port={$this->port};dbname={$this->dbname}";
            $this->connect = new PDO($url_conn, $this->user, $this->pass);
            return $this->connect;
        } catch (PDOException $err) {
            die("Erro: entre em contato com o administrador: ". EMAIL_ADM);
        }
    }
}

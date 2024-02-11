<?php
namespace Core;

/**
 * Responsável por carregar as páginas de views
 * @author André bronca.andre@gmail.com
 */
class ConfigView {
    
    //formato do php 8, declara e já atribui os atributos
    /**
     * recebe o endereço da view e os dados
     *
     * @param string $name View que deve ser carregada
     * @param array $dados dados para serem exibidos na tela
     */
    public function __construct(private string $namePage, private array|null|string $dados)
    {
        //var_dump($this->dados);
    }

    public function loadPageView(): void {
        $file = 'app/'.$this->namePage.'.php';
        if(file_exists($file)){
            include 'app/sts/Views/include/header.php';
            include $file;
            include 'app/sts/Views/include/footer.php';
        } else {
            echo "Erro: Por favor tente novamente. Caso o problema persista, entre em contato <br>
            com o administrador: ". EMAIL_ADM;
        }
    }
}
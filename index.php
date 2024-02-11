<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        //carregando o composer
        require './vendor/autoload.php';
        //instanciar a controller que trata a url e abre a classe específica
        $url = new Core\ConfigController();
        $url->loadPage();
    ?>
</body>
</html>
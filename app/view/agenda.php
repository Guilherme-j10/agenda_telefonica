<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="<?= STYLESHEET.'style.css?nocache='.NOCACHE; ?>">
    </head>
    <body>
        <main class="screen_middle">
            <header class="header_aplication">
                <h1>Agenda telefonica</h1>
            </header>
            <form class="container_inputs" action="<?= SITE_NAME.'salve_contact'; ?>" method="POST">
                <div class="inputs">
                    <input type="text" name="nome" required placeholder="Digite o nome aqui"> 
                    <input type="text" name="sobrenome" required placeholder="Digite o sobrenome aqui"> 
                    <input type="text" name="telefone" required placeholder="(11) 98465-6468">               
                </div>
                <input type="submit" value="add contact">
            </form>
            <div class="list_container">
                <?php foreach($dados['agenda'] as $chave => $valor): ?>
                    <a href="#" class="box_contact">
                        <span style="background-color: <?= $dados['agenda'][$chave]['cor'] ?>;">
                            <?= $dados['agenda'][$chave]['dublle_latter']; ?>
                        </span>
                        <div class="info">
                            <h1><?= $dados['agenda'][$chave]['nome']; ?> <?= $dados['agenda'][$chave]['sobrenome']; ?></h1>
                            <p><?= $dados['agenda'][$chave]['numero_telefone']; ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </main>
    </body>
</html>
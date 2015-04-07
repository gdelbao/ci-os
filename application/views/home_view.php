<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página Inicial</title>
        <link rel="stylesheet" href="<?php echo base_url('utility/css/main.css') ?>"/>
    </head>
    <body>
        <div id="conteudo">
            <header>
                <nav id="menu">
                    <ul>
                        <li><a href="#">Cadastros</a>
                            <ul>
                                <li><a href="#">Usuario</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Ações</a></li>
                    </ul>
                </nav>
            </header>

            <div id="conteudo">    
            <h1>home</h1>
            <h2>Seja Bem Vindo <?php echo $username; ?>!</h2>

            <a href="home/logout">Logout</a>

            </div>

        </div>
    </body>
</html>

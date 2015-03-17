<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Área Privada</title>
        <link rel="stylesheet" href="<?php echo base_url('utility/css/home.css') ?>"/>
    </head>
    <body>
 
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
        <h2>Bem Vindo <?php echo $username; ?></h2>
        
        <a href="home/logout">Logout</a>
        
        </div>
    </body>
</html>

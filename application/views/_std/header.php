<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $titulo_pagina; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url('utility/css/main.css') ?>"/>
    </head>
    <body>
        <div id="container">
            <header>
                <nav id="menu">
                    <ul>
                        <li><a href="home">HOME</a></li>
                        <li><a href="#">CADASTROS</a>
                            <ul>
                                <li><?php echo anchor('usuario', 'Usuário'); ?></li>
                            </ul>
                        </li>
                        <li><a href="#">MENU 2</a></li>
                    </ul>
                </nav>
                
                <div id="dadosUser">
                <p>Seja Bem Vindo <?php echo $username; ?></p>
                </div>
            </header>
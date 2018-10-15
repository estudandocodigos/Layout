<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <title>FlexBox Layout</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="...">
        <meta name="robots" content="index, follow">
        <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/contact.css" type="text/css">
        <link rel="canonical" href="https://localhost/contact.php">
    </head>
    <body>
        <!--Titulo e Menu-->
        <header id="cabecalho">
            <div class="container-titulo">
                <h1>Flex<span class="marcar">Box<span></h1>
            </div>
            <!--Menu-->
            <div class="container-menu">
                <nav>
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="about.php">about</a></li>
                        <li><a href="services.php">services</a></li>
                        <li><a class="marcar" href="contact.php">contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--Rodapé do Site-->
        <footer id="rodape">
            <!--Contatos / Biografia / NewLetter-->
            <div class="textos">
                <!--Contatos-->
                <div class="contatos espaco">
                    <h2>Contatos</h2>
                    <span class="img-txt"><img src="icons/phone.svg" alt="telefone">(99) 4626-5546</span><br>
                    <span class="img-txt"><img src="icons/envelope.svg" alt="email">flexbox@flexbox.com</span><br>
                    <span class="img-txt"><img src="icons/map.svg" alt="mapa">801 Mandaguari, Imperatriz MA</span><br>
                </div>
                <!--Biografia-->
                <div class="biografia espaco">
                    <h2>About</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <!--Contatos-->
                <div class="newsletter espaco">
                    <h2>Newsletter</h2>
                    <p>orem ipsum dolor sit</p><br>
                    <fieldset>
                        <form action="#">
                            <input type="email">
                            <input class="btn" type="button" value="Sign Up">
                        </form>
                    </fieldset>
                </div>
            </div>
            <!--Informação do Registro-->
            <div class="copy">
                <span>FlexBox 2018&copy;<?php echo date('Y')?> | @rsanttos89</span>
            </div>
        </footer>
    </body>
</html>

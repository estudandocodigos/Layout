<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <title>FlexBox Layout</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="...">
        <meta name="robots" content="index, follow">
        <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="canonical" href="https://localhost/index.php">
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
                        <li><a class="marcar" href="index">home</a></li>
                        <li><a href="about.php">about</a></li>
                        <li><a href="services.php">services</a></li>
                        <li><a href="contact.php">contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--Capa e Texto-->
        <section id="capa">
            <div class="container-texto">
                <h2>Welcome <span class="marcar">To FlexBox<span></h2>
                <p>FlexBox Layout Totalmente Responsivo com HTML5 e CSS3.</p>
            </div>
        </section>
        <!--Lista de Serviços-->
        <main id="services">
            <h2>Lista de Serviços</h2>
            <p>What's included?</p>
            <div class="caixa-um">
                <span>
                    <img src="icons/ban.svg" alt="services">
                    <h3>Services</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </span>
                <span>
                    <img src="icons/ban.svg" alt="services">
                    <h3>Services</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </span>
                <span>
                    <img src="icons/ban.svg" alt="services">
                    <h3>Services</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </span>
            </div>
            <!--Lista de Serviços Dois-->
            <div class="caixa-dois">
                <span>
                    <img src="icons/ban.svg" alt="services">
                    <h3>Services</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </span>
                <span>
                    <img src="icons/ban.svg" alt="services">
                    <h3>Services</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </span>
                <span>
                    <img src="icons/ban.svg" alt="services">
                    <h3>Services</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </span>
            </div>
        </main>
        <!--Image e Texto do Fone-->
        <section id="phone">
            <div class="container">
                <div class="img">
                    <!--Imagem do Fone-->
                    <figure>
                        <img src="images/headphone.png" alt="fone de ouvido">
                    </figure>
                </div>
                <!--Texto Sobre o Fone-->
                <div class="text">
                    <h2>Core Features</h2>
                    <span>Features</span><br>
                    <span>Features</span><br>
                    <span>Features</span><br>
                    <span>Features</span><br>
                    <span>Features</span><br>
                </div>
            </div>
        </section>
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

<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="text"/>
        <title>Fotografias</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="shortcut icon" href="icons/jw.ico"/>
    </head>
    <body>
        <!--CONFIG. DE CABEÇALHO-->
        <header id="cabecalho">
            <div class="container">
                <!--CONFIG. TITULOS SMARTS E DESKTOPS-->
                <div class="titulo">
                    <h2><a href="#">Photo</a></h2>
                </div>
                <!--CONFIG. MENU DESKTOP-->
                <div class="menu">
                    <nav>
                        <ul>
                            <li><a class="marca" href="#">Home</a></li>
                            <li><a href="#">Agendar</a></li>
                            <li><a href="#">Planos</a></li>
                            <li><a href="#">Mural</a></li>
                            <li><a href="#">Dúvidas</a></li>
                            <li><a href="#">Contatos</a></li>                            
                        </ul>
                    </nav>
                </div>
                <!--CONFIG. MENU SMARTPHONE-->
                <div id="menuSmart" class="smartMenu">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#">Home</a>
                    <a href="#">Agendamentos</a>
                    <a href="#">Planos</a>
                    <a href="#">Mural</a>
                    <a href="#">Dúvidas</a>
                    <a href="#">Contatos</a>
                </div>
                <span class="abrir" onclick="openNav()">&#9776;</span>
                <script>
                    function openNav() {
                        document.getElementById("menuSmart").style.width = "100%";
                    }
                    function closeNav() {
                        document.getElementById("menuSmart").style.width = "0";
                    }
                </script>
            </div>
            <!--CONFIG. DA LOGO MARCA-->
            <div class="logo">
                <img src="icons/logo.svg" alt="logo marca"/>
                <h1>Photography</h1>
            </div>
        <!--CONFIG. DOS BTNS-->
            <section id="btns">
                <div class="ctn borda-dir">
                    <div class="img-btn">
                        <a href="#"><img src="icons/planos.svg" alt="planos"/></a>
                        <a href="#"><img class="borda-top" src="icons/agendar.svg" alt="Agendamentos"/></a>
                    </div>
                </div>
                <div class="ctn">
                    <div class="img-btn">
                        <a href="#"><img src="icons/portfolio.svg" alt="portfolio"/></a>
                        <a href="#"><img class="borda-top" src="icons/duvidas.svg" alt="duvidas"/></a> 
                    </div>
                </div>
            </section>
        </header>
        <!--CONFIG. DO ASIDE BLOCO DATA-->
        <aside id="bloco-data">
            <div class="data-txt">
                <?php 
                    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                    date_default_timezone_set('America/Sao_Paulo');
                ?>
                <p><?php echo strftime("%d");?></p>
                <p><?php echo strftime("%B");?></p>
            </div>
        </aside>
        <!--CONFIG. DO ASIDE BLOCOS TELEFONE E REDE SOCIAL-->
        <aside id="blocos-tel-social">
            <div class="telefone">
                <p>Fone: (99) 35245-9659 / 63526-8569</p>
            </div>
            <div class="social">
                <h2>Follow</h2>
                <a href="#"><img src="icons/facebook.svg" alt="facebook"></a>
                <a href="#"><img src="icons/instagram.svg" alt="instagram"></a>
            </div>
        </aside>
    </body>
</html>
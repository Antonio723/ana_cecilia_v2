<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cache">
    <link rel="shortcut icon" href="../img/logo_ana_cecilia_v4.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/main_mobile.css">
    <link rel="stylesheet" href="../css/juntese/screen.css">
    <link rel="stylesheet" href="../css/juntese/mobile.css">
    <title>Junte-se</title>
</head>

<body>
<header>
        <figure>
            <a href="home.php"><img src="../img/logo_ana_cecilia_v4.png" alt="logo" id="main_logo"></a>
        </figure>
        <aside id="menus">
            <nav class="normal_menu">
                <ul class="menu-screen">
                    <li class="item_menu"><a href="home.php" class="text_menu">Home</a></li>
                    <li class="item_menu"><a href="institucional.php" class="text_menu">Institucional</a></li>
                    <li class="item_menu"><a href="acoes/" class="text_menu">Nossas ações</a></li>
                    <li class="item_menu causa"><a href="juntese.php" class="text_menu selecionado">Junte-se à causa</a></li>
                    <li class="item_menu doacao"><a href="doacao.php" class="text_menu">QUERO DOAR</a></li>
                </ul>
            </nav>
            <nav class="mobile">
                <button id="menu-mobile-button" onclick="AbrirMenu()"><img src="../img/menu_mobile_v3.png" alt="menu_icon" class="icon" id="icon_menu"></button>
                <ul class="menu-mobile">
                    <li class="item_menu"><a href="home.php" class="text_menu">Home</a></li>
                    <li class="item_menu"><a href="institucional.php" class="text_menu">Institucional</a></li>
                    <li class="item_menu"><a href="acoes/" class="text_menu">Nossas ações</a></li>
                    <li class="quebraDeTexto item_menu causa"><a href="juntese.php" class="text_menu selecionado">Junte-se à causa</a></li>
                    <li class="quebraDeTexto item_menu doacao"><a href="doacao.php" class="text_menu">QUERO DOAR</a>
                    </li>
                </ul>
            </nav>
        </aside>
    </header>
    <main>
        <h1>Junte-se à causa</h1>
        <div class="firstPart">
            <img src="../img/preparoalimento001.webp" alt="doacao" class="doacaoImage">
            <div class="itemstext">
                <p>Hoje a associação Ana Cecilia é limitada a doações apenas de familiares, empresas locais e amigos. Por isso precisamos do seu apoio. Atualmente nosso principal objetivo é alimentar e dar o maior auxilio possível aos nossos irmãos em situação de rua, por meio de ações sociais localizadas em cotia. Para isso aceitamos doações de diversos tipos, como:</p>
                <ul class="menuDoacao">
                    <li>Cestas básicas</li>
                    <li>Serviços</li>
                    <li>Roupas</li>
                    <li>Moveis</li>
                    <li>Dentre outros</li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="secondPart">
            <img src="../img/docao2.png" alt="doacao" class="doacaoImage">
            <p>Como meio de retorno os doadores podem ter seu imposto de renda parcialmente abatido, por conta de estar apoiando uma iniciativa que visa ajudar pessoas necessitadas (esse valor é descontado pelo próprio governo como ferramenta de incentivo a caridade), além obviamente da ajuda em si.</p>
            <p>Para não te atrapalhar a nos ajudar, também fazemos a retirada do material doado, qualquer tipo de ajuda é bem-vinda. Para isso temos um formulário intuitivo que auxilia no intermédio associação e doador.</p>
        </div>
        <p>E se isso não fosse o bastante, há a possibilidade de seu empreendimento ser divulgado na nossa pagina “Institucional” que ajudará na própria divulgação dos senhores e dos comércios envolvidos.</p>
    </main>
    <footer>
        <div class="informacoes">
            <div class="endereco">
                <h2>Associação Ana cecilia</h2>
                <div class="justificador">
                    <p class="endereco">R. Ipiau 06 </p>
                    <p>Jardim Araruama, Cotia - SP</p>
                    <p>06700-581</p>
                </div>
            </div>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.838479674918!2d-46.941671899999996!3d-23.610125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf07820a013bcf%3A0xb15d1e66a804adf2!2sR.%20Ipiau%2C%206%20-%20Jardim%20Leonor%2C%20Cotia%20-%20SP%2C%2006700-581!5e0!3m2!1spt-BR!2sbr!4v1667128022669!5m2!1spt-BR!2sbr" width="400" height="150" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contato">
                <h2>Contato</h2>
                <div class="justificador">
                    <p>(11) 983810699 - Roberth</p>
                    <p>(11) 941136144 - Valdiner (nenê)</p>
                    <p>contato@anacecilia.org</p>
                </div>
            </div>
        </div>
        <div class="copyright">
            <h3>Copyright ₢ 2022 <span class="strong">Associação Ana Cecília</span> todos direitos reservados</h3>
            <h3>Desenvolvido por <a href="http://lemonsolucoes.com"><span>TMT</span></a></h3>
        </div>
    </footer>
</body>
<script src="../script/menuMobile.js"></script>
</html>
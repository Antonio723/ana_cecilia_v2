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
    <link rel="stylesheet" href="../css/home/screen.css">
    <link rel="stylesheet" href="../css/home/mobile.css">
    <title>Home</title>
</head>

<body>
<?php
    if (!isset($_SESSION))
        session_start();
    if (isset($_SESSION["mensagem"])) {
    ?>
        <div class="mensagem">
            <?= $_SESSION["mensagem"] ?>
            <div class="progress-bar"></div>
        </div>
        <script>
            let teste = document.querySelector(".mensagem");
            setInterval(() => {
                teste.style.display = "none";
            }, 5000);
        </script>
    <?php
        // unset($_SESSION["mensagem"]);
    }
    ?>
    <header>
        <figure>
            <a href="home.php"><img src="../img/logo_ana_cecilia_v4.png" alt="logo" id="main_logo" ></a>
        </figure>
        <aside id="menus">
            <nav class="normal_menu">
                <ul class="menu-screen">
                    <li class="item_menu"><a href="home.php" class="text_menu selecionado">Home</a></li>
                    <li class="item_menu"><a href="institucional.html" class="text_menu">Institucional</a></li>
                    <li class="item_menu"><a href="acoes/acoes.html" class="text_menu">Nossas ações</a></li>
                    <li class="item_menu causa"><a href="juntese.html" class="text_menu">Junte-se à causa</a></li>
                    <li class="item_menu doacao"><a href="doacao.php" class="text_menu">QUERO DOAR</a></li>
                </ul>
            </nav>
            <nav class="mobile">
                <button id="menu-mobile-button" onclick="AbrirMenu()"><img src="../img/menu_mobile_v3.png"
                        alt="menu_icon" class="icon" id="icon_menu"></button>
                <ul class="menu-mobile">
                    <li class="item_menu"><a href="home.php" class="text_menu selecionado">Home</a></li>
                    <li class="item_menu"><a href="institucional.html" class="text_menu">Institucional</a></li>
                    <li class="item_menu"><a href="acoes/acoes.html" class="text_menu">Nossas ações</a></li>
                    <li class="quebraDeTexto item_menu causa"><a href="juntese.html" class="text_menu">Junte-se à causa</a></li>
                    <li class="quebraDeTexto item_menu doacao"><a href="doacao.php" class="text_menu">QUERO DOAR</a>
                    </li>
                </ul>
            </nav>
        </aside>
    </header>
    <main>
        <article class="one">
            <h2 class="strong">Biografia Ana Cecilia</h2>
            <div class="subsection">
                <img src="../img/logo_ana_cecilia_v4.png" alt="cidade">
                <p>
                    Ana Cecília, nascida em Minas Gerais em 22 novembro de 1934, filha de agricultores. Nasceu com deficiência em um dos membros superiores, porém isso não a impediu de se casar e ter 13 filhos, também nunca se limitou as dificuldades da sua vida. Sempre batalhadora e ajudando a todos, mesmo depois de viúva, continuou sua missão de cuidar da família e de todos que se encontravam com dificuldades. Participando da Associação São Vicente de Paulo, seu objetivo de ajudar e visitar ficou ainda mais ativo, conseguindo maior conforto e até criar momentos de partilha e interação. Ana faleceu em 20 de maio de 2019, deixando o legado de que ajudar a todos que passam por dificuldades é uma imensa alegria, pois quem tem fome, tem pressa. Ainda dada continuidade em seu proposito tão marcante em vida, pois, seu exemplo deixou marcas, e continuar sua missão será sempre um desafio.
                </p>
            </div>
        </article>
        <!-- <h1 class="strong">Nossa Historia</h1>
        <article class="two">
            <p>Mourou um tempo na cidade, casa de familiares para estudar, mesmo que fosse o básico. Casou-se com Manoel
                de Souza neto. E algum tempo depois já com 1 filho nos braços foram residir em São Jorge do Ivaí no
                Paraná. Segundo ela antes de chegar ao Paraná tiveram que fugir de latifundiários mineiros chamados de
                Coiotes, que recrutavam famílias para trabalho escravo.
            </p>
            <img src="../img/docao2.png" alt="">
            <p>Já morando no Paraná tiveram mais 12 filhos, totalizando 13. Trabalhavam muito para o sustento e bem
                estar dos mesmo. Em 1980, devido a fragilidade da saúde de seu Manoel, viram para Cotia (SP), à procura
                de tratamento cardiológico e melhoras para toda família.
            </p>
        </article> -->
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
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.838479674918!2d-46.941671899999996!3d-23.610125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf07820a013bcf%3A0xb15d1e66a804adf2!2sR.%20Ipiau%2C%206%20-%20Jardim%20Leonor%2C%20Cotia%20-%20SP%2C%2006700-581!5e0!3m2!1spt-BR!2sbr!4v1667128022669!5m2!1spt-BR!2sbr"
                    width="400" height="150" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            <h3>Desenvolvido por <a href="http://lemonsolucoes.com"><span>Lemon</span></a></h3>
        </div>
    </footer>
</body>
<script>
    function AbrirMenu() {
        if (document.querySelector('.menu-mobile').style.display != "none") {
            document.querySelector('.menu-mobile').style.display = "none"; //menu fechado
            document.querySelector('.mobile').style.marginTop = '0px';
            document.querySelector('.icon').style.transform = "rotate(0deg)"; //menu fechado
        } else {
            document.querySelector('.icon').style.transform = "rotate(90deg)"; //menu fechado
            document.querySelector('.menu-mobile').style.display = "flex"; //menu fechado
            document.querySelector('.mobile').style.marginTop = '300px';
        }
    }

    AbrirMenu();
</script>

</html>
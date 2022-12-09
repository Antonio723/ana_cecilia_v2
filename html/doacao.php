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
    <link rel="stylesheet" href="../css/doacao/main.css">
    <link rel="stylesheet" href="../css/doacao/mobile.css">
    <title>Doação</title>
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
            }, 7000);
        </script>
    <?php
        // unset($_SESSION["mensagem"]);
    }
    ?>
    <header>
        <figure>
            <a href="home.php"><img src="../img/logo_ana_cecilia_v4.png" alt="logo" id="main_logo"></a>
        </figure>
        <aside id="menus">
            <nav class="normal_menu">
                <ul class="menu-screen">
                    <li class="item_menu"><a href="home.php" class="text_menu">Home</a></li>
                    <li class="item_menu"><a href="institucional.html" class="text_menu">Institucional</a></li>
                    <li class="item_menu"><a href="acoes/acoes.html" class="text_menu">Nossas ações</a></li>
                    <li class="item_menu causa"><a href="juntese.html" class="text_menu">Junte-se à causa</a></li>
                    <li class="item_menu doacao"><a href="doacao.php" class="text_menu">QUERO DOAR</a></li>
                </ul>
            </nav>
            <nav class="mobile">
                <button id="menu-mobile-button" onclick="AbrirMenu()"><img src="../img/menu_mobile_v3.png" alt="menu_icon" class="icon" id="icon_menu"></button>
                <ul class="menu-mobile">
                    <li class="item_menu"><a href="home.php" class="text_menu">Home</a></li>
                    <li class="item_menu"><a href="institucional.html" class="text_menu">Institucional</a></li>
                    <li class="item_menu"><a href="acoes/acoes.html" class="text_menu">Nossas ações</a></li>
                    <li class="quebraDeTexto item_menu causa"><a href="juntese.html" class="text_menu ">Junte-se à causa</a></li>
                    <li class="quebraDeTexto item_menu doacao"><a href="doacao.php" class="text_menu">QUERO DOAR</a>
                    </li>
                </ul>
            </nav>
        </aside>
    </header>
    <main>
        <h1>
            Faça uma doação
        </h1>
        <hr>
        <form action="main.php" method="post">
            <input id="name" type="text" name="name" placeholder="Nome:" class="mainInputs">
            <input id="Telefone" type="tel" name="tel" placeholder="Telefone:" class="mainInputs">
            <input type="email" id="email" name="email" placeholder="E-mail:" class="mainInputs">
            <div class="typeDoacao">
                <h2>Tipo de doação</h2>
                <div class="donationType">
                    <div class="donationTypeItem">
                        <input id="typeMoeny" type="checkbox" name="typeMoney" id="">
                        <label for="typeMoeny">dinheiro</label>
                    </div>
                    <div class="donationTypeItem">
                        <input id="typeFood" type="checkbox" name="typeFood" id="">
                        <label for="typeFood">alimento/material</label>
                    </div>
                    <div class="donationTypeItem">
                        <input id="typeServices" type="checkbox" name="typeServices" id="">
                        <label for="typeServices">Serviços</label>
                    </div>
                </div>
            </div>
            <input type="text" id="aboutDonation" placeholder="Escreva observações ou descrição da sua doação (caso necessario):">
            <div class="terms">
                <div class="termItem">
                    <input type="checkbox" name="privacityPolitic" id="privacityPolitic" required>
                    <label for="privacityPolitic">Li e aceito a <span class="specialtext">POLITICA DE PRIVACIDADE</span></label>
                </div>
                <div class="termItem">
                    <input type="checkbox" name="contact" id="contact" required>
                    <label for="contact">Aceito ser contatado pela associação Ana Cecilia</label>
                </div>
            </div>
            <button type="submit" id="submit">Enviar</button>
            <p><span class="boldTitles">OU</span></p>
            <div class="bankDonation">
                <div class="donationItem itemDonationPix">
                    <h2>Faça um pix</h2>
                    <img src="../img/qr_code.png" alt="qrCode">
                    <p class="strong">CNPJ</p>
                    <p>46.472.698/0001-49</p>
                </div>
                <div class="donationItem">
                    <h2>Doação Bancaria</h2>
                    <div class="donationBank">
                        <p><span class="boldTitles">Agencia: </span>3583-1</p>
                        <p><span class="boldTitles">Conta: </span>Conta Corrente 40213-3</p>
                        <p><span class="boldTitles">Banco: </span>Banco do Brasil</p>
                        <p><span class="boldTitles">Beneficiario: </span>Associação Ana Cecília</p>
                    </div>
                </div>
            </div>
        </form>
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
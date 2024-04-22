<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>| ImpérioGentleman |</title>
    
</head>

<body>
    <br><br>
    <h1>
    ⌚ Império Gentleman ⌚
    </h1>
    <h2>Tempo e elegância unidos em cada tic-tac. Descubra a sofisticação atemporal na Império Gentleman!
    </h2>

    <div class="image_left">
        <img src="imagens/poedagar1.jpg" alt="imagem_esquerda"><br><br>
    </div>
    
    <div class="image_center">
        <img src="imagens/poedagar2.jpg" alt="imagem_direita"><br><br>
        <a href="checkout/checkoutPoedagarCentro.php">Adquira já!</a>
    </div>

    <div class="image_rigth">
        <img src="imagens/poedagar4.jpg" alt=""><br><br>
        <a href="checkout/checkoutPoedagarCentro.php">Adquira já!</a>
    </div>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
        <a onclick="scrollToSection('sobre-nos')">Sobre</a>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <h1>Sobre nós</h1>
    <h2 id="sobre-nos">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus veritatis error nemo molestiae
        cumque consequatur nam dolor! Tempora optio odio quos, minus, eius iure molestias perspiciatis doloribus dicta
        asperiores eum?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sapiente odit corporis quo fugit harum minus ipsam veritatis voluptas accusantium, quod, exercitationem dolorum est modi voluptate sed alias consequatur et?</h2>
    <script>
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            }
        }


    </script>
</body>

</html>
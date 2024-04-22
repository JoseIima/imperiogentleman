<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style3.css">
    <title>| ImpérioGentleman |</title>
    
</head>

<body>
    <br><br>
    <h1>
    ⌚ Império Gentleman ⌚
    </h1>
    <h2>Tempo e elegância unidos em cada tic-tac. Descubra a sofisticação atemporal na Império Gentleman!
    </h2>

    <div class="card">
        <div class="img-left">
            <img src="imagens/poedagar1.jpg">
        </div>
        <div class="content">
            <h2>Saiba mais</h2>
            <p>
                • Relógio De Luxo Da Marca Poedagar <br>
                • Em Aço Inoxidável E Quartzo<br>
                • À prova d'agua <br>
                • Com Luz Noturna<br>
                • Fundo na cor branca

            </p>
            <a href="checkout/checkoutPoedagarLeft.php" class="read-more">
                Adquira já
            </a>
        </div>
    </div>   
    
    <div class="card2">
        <div class="img-center">
            <img src="imagens/poedagar2.jpg">
        </div>
        <div class="content2">
            <h2>Saiba mais</h2>
            <p>
                • Relógio De Luxo Da Marca Poedagar<br>
                • Em Aço Inoxidável E Quartzo<br>
                • À prova d'agua <br>
                • Com Luz Noturna<br>
                • Fundo na cor verde

            </p>
            <a href="checkout/checkoutPoedagarCentro.php" class="read-more2">
                Adquira já
            </a>
        </div>
    </div> 

    <div class="card3">
        <div class="img-right">
            <img src="imagens/poedagar4.jpg">
        </div>
        <div class="content3">
            <h2>Saiba mais</h2>
            <p>
                • Relógio De Luxo Da Marca Poedagar<br>
                •  Em Aço Inoxidável E Quartzo<br>
                •  À prova d'agua <br>
                •  Com Luz Noturna<br>
                •  Fundo na cor preta

            </p>
            <a href="checkout/checkoutPoedagarRight.php" class="read-more3">
                Adquira já
            </a>
        </div>
    </div> 
    <br><br><br>
    <video src="videos/videoPoedagar.mov" width="600" height="300" preload="auto" controls autoplay loop></video>

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
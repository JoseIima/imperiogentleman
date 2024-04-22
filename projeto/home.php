<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| TravelSmart |</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #7db9e8, #5fa4d9);
            text-align: center;
            color: white;
        }

        .box {
            position: fixed;
            top: 30px;
            right: 20px;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;


        }

        a {
            text-decoration: none;
            color: white;
            border: 3px solid blue;
            border-radius: 10px;
            padding: 10px;
        }

        a:hover {
            background-color: dodgerblue;
        }

        h2 {
            font-family: 'Roboto', sans-serif;
            text-align: justify;
            max-width: 800px;
            margin: 0 auto;
        }

        .image_left {
            float: left;
            margin-top: -110px;
            margin-right: 20px;
            margin-left: 60px;
            position: fixed;

        }

        .image_rigth {
            float: right;
            margin-top: -110px;
            margin-left: 1655px;
            margin-right: 60px;
            position: fixed;


        }

        .image_center {
            display: inline-block;
            margin-top: 130px;
            transform: scale(2);
            margin-left: -50px;
        }
    </style>
</head>

<body>
    <br><br>
    <h1>
        &#9992; Travel Smart &#9992;
    </h1>
    <h2>Seja bem-vindo ao Travel Smart - Seu Portal para Viagens Sem Complicações! Encontre as melhores ofertas em voos,
        hotéis e aluguéis de carros, tudo em um só lugar. Junte-se a nós hoje para começar a planejar sua próxima
        aventura com facilidade e confiança!
    </h2>

    <div class="image_left">
        <img src="imagens/family1.jpg" alt="imagem_esquerda">
    </div>
    <div class="image_rigth">
        <img src="imagens/family2.jpg" alt="imagem_direita">
    </div>

    <div class="image_center">
        <img src="imagens/image1.jpg" alt="">
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
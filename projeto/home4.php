<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style3.css">
    <title>| Império Gentleman |</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

body {
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(to right, #000000, #422600);
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
    border: 3px solid rgb(204, 191, 4);
    border-radius: 10px;
    padding: 10px;
}

a:hover {
    background-color: #422600;
}

h2 {
    font-family: 'Roboto', sans-serif;
    text-align: justify;
    max-width: 800px;
    margin: 0 auto;
}

h1 {
    color: rgb(224, 210, 4);
}

.card {
    display: flex;
    justify-content: center;
    width: 350px;
    height: 300px;
    position: relative;
    background-color: rgb(56, 48, 3);
    border-radius: 20px;
    box-shadow: 0px 35px 80px rgba(0, 0, 0, 0.15);
    transition: 0.5s;
    margin-left: 400px;
    margin-top: 50px;
}

.card:hover {
    height: 400px;
}

.card .img-left {
    position: absolute;
    width: 250px;
    height: auto;
    top: 0px;
    transition: 0.5s;
}

.card:hover .img-left {
    top: -100px;
    scale: 0.75;
}

.card .img-left img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    margin-top: 10px;
}

.card .content {
    display: flex;
    flex-direction: column;
    gap: 18px;
    position: absolute;
    top: 260px;
    width: 100%;
    padding: 0px 30px;
    text-align: center;
    height: 30px;
    overflow: hidden;
    transition: 0.5s;
}

.card:hover .content {
    top: 130px;
    height: 250px;
}

.card .read-more {
   background: linear-gradient(90deg, #4bc007, #1d4601);
   padding: 12px;
   color: #fff;
   text-decoration: none;
   border-radius: 8px;
}


.card2 {
    display: flex;
    justify-content: center;
    width: 350px;
    height: 300px;
    position: relative;
    background-color: rgb(56, 48, 3);
    border-radius: 20px;
    box-shadow: 0px 35px 80px rgba(0, 0, 0, 0.15);
    transition: 0.5s;
    margin-left: 800px;
    margin-top: -300px;
}

.card2:hover {
    height: 400px;
}

.card2 .img-center {
    position: absolute;
    width: 250px;
    height: auto;
    top: 0px;
    transition: 0.5s;
}

.card2:hover .img-center {
    top: -100px;
    scale: 0.75;
}

.card2 .img-center img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    margin-top: 10px;
}

.card2 .content2 {
    display: flex;
    flex-direction: column;
    gap: 18px;
    position: absolute;
    top: 260px;
    width: 100%;
    padding: 0px 30px;
    text-align: center;
    height: 30px;
    overflow: hidden;
    transition: 0.5s;
}

.card2:hover .content2 {
    top: 130px;
    height: 250px;
}

.card2 .read-more2 {
   background: linear-gradient(90deg,#4bc007, #1d4601);
   padding: 12px;
   color: #fff;
   text-decoration: none;
   border-radius: 8px;
}



.card3 {
    display: flex;
    justify-content: center;
    width: 350px;
    height: 300px;
    position: relative;
    background-color: rgb(56, 48, 3);
    border-radius: 20px;
    box-shadow: 0px 35px 80px rgba(0, 0, 0, 0.15);
    transition: 0.5s;
    margin-left: 1200px;
    margin-top: -300px;
}

.card3:hover {
    height: 400px;
}

.card3 .img-right {
    position: absolute;
    width: 250px;
    height: auto;
    top: 0px;
    transition: 0.5s;
}

.card3:hover .img-right {
    top: -100px;
    scale: 0.75;
}

.card3 .img-right img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    margin-top: 10px;
}

.card3 .content3 {
    display: flex;
    flex-direction: column;
    gap: 18px;
    position: absolute;
    top: 260px;
    width: 100%;
    padding: 0px 30px;
    text-align: center;
    height: 30px;
    overflow: hidden;
    transition: 0.5s;
   
}

.card3:hover .content3 {
    top: 130px;
    height: 250px;
}

.card3 .read-more3 {
   background: linear-gradient(90deg, #4bc007, #1d4601);
   padding: 12px;
   color: #fff;
   text-decoration: none;
   border-radius: 8px;
}
    </style>

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
        <a href="contato.php">Fale conosco</a>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <h1>Sobre nós</h1>
    <h2 id="sobre-nos">
    
    Bem-vindo ao Império Gentleman, o destino definitivo para homens que valorizam estilo, sofisticação e precisão. Fundada com a paixão por relógios masculinos, nossa loja online oferece uma seleção cuidadosamente curada dos mais refinados e elegantes relógios, cada um representando o ápice do artesanato e design.

Aqui, acreditamos que um relógio vai muito além de simplesmente marcar o tempo - é uma expressão de individualidade, um símbolo de status e um companheiro confiável para todas as ocasiões. <p>Nossa missão é proporcionar a cada cliente uma experiência de compra excepcional, onde a qualidade excepcional se encontra com o serviço impecável.

Navegue pela nossa coleção de marcas renomadas e modelos exclusivos, cuidadosamente selecionados para atender aos mais exigentes gostos. Seja você um entusiasta experiente ou um recém-chegado ao mundo dos relógios finos, estamos aqui para guiá-lo em sua jornada para encontrar o relógio perfeito que complementará seu estilo e personalidade.

</p><p>No Império Gentleman, a excelência é o nosso padrão, e cada relógio que vendemos é uma promessa de qualidade, elegância e distinção. Junte-se a nós e descubra a arte de ser verdadeiramente refinado - bem-vindo ao Império Gentleman.

</p>

    </h2>
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleLogin.css">
    <title>Login | IG</title>

    <style>
    
    body {
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(to right, #000000, #422600);
}

div {
    background-color: rgba(248, 241, 188, 0.719);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 60px;
    border-radius: 15px;
    color: #fff;
}

input {
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
}

.inputSubmit {
    background-color: #ffd700;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;

}

.inputSubmit:hover {
    background-color: #422600;
    cursor: pointer;
}

h1{
    color: cornsilk;
    text-align: center;
    margin-top: 200px;
}
fieldset {
            border: 3px solid #ffd700;
        }
    </style>
</head>

<body>
    <a href="home4.php">Voltar</a>
    <h1>Império Gentleman</h1><br><br>
    <div>
        <fieldset>
            <h2>Login</h2>
                <form action="testLogin.php" method="POST">
                    <input type="text" name="email" placeholder="Email">
                    <br><br>
                    <input type="password" name="senha" placeholder="Senha">
                    <br><br>
                    <input class="inputSubmit" type="submit" name="submit" value="Enviar">
                </form>
        </fieldset>
    </div>
</body>

</html>
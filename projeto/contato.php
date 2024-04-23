<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco | IG</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #000000, #422600);
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
        }

        fieldset {
            border: 3px ##b8860b;
        }

        legend {
            border: 1px #ffd700;
            padding: 10px;
            text-align: center;
            background-color: #ffd700;
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            letter-spacing: 2px;
            width: 100%
        }

        .labelinput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelinput,
        .inputUser:valid~.labelinput {
            top: -20px;
            font-size: 12px;
            color: #ffd700;

        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background: #ffd700;
            width: 10%;
            border: none;
            padding: 5px 10px ;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            margin-top: 600px;
            margin-left: 850px;
        }

        #submit:hover {
            background: #422600;
        }

        .text-area{
            width: 100%;
            

        }

        .legenda{
           color: #ffd700;
        }
    </style>
</head>

<body>
    <a href="home4.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend><b>Fale Conosco</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome Completo</label>
                </div>
                <br>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelinput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <legenda class="legenda">Mensagem</legenda><br><br>
                    <textarea class="text-area" placeholder="Digite sua mensagem" name="mensagem" maxlength="150"required></textarea>
                </div>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>
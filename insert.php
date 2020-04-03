<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html{
            height: 100%;
        }
        body{
            height: 100%;
        }
        *{
            font-family: Oswald, sans-serif;
            color: rgb(20, 20, 20);
            font-size: 25px;
            text-align: center;
        }
        body{
            background-color: rgb(7, 10, 20);
            margin: 0;
        }
        h1{
            font-size: 3rem;
            color: rgb(214, 34, 34);
            margin-bottom: 0;
            margin-top: 0;
            padding-bottom: 0;
        }
        h4{
            font-weight: 100;
            color: #FFF;
            margin-top: 0;
        }
        p{
            color: palegoldenrod;
        }
        div.insert{
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        input, textarea{
            border-radius: 5px;
            box-shadow: 0px 0px 9px red;
            border: none;
        }
        p{
            padding: 0;
            margin: 0;
        }
        input[type=submit]{
            margin-top: 15px;

        }
        footer h4, h5 {
            padding-top: 0;
            padding-bottom: 0;
            margin: 0;
            background-color: black;
        }
        footer{
            position: sticky;
            margin-bottom: 0;
            margin-top: 40px;
        }
    </style>
    <title>TODOds</title>
</head>
<body>
    <div class="container">
        <h1>TODOds</h1>
        <hr style="width: 140px;">
        <h4>O sistema que você pediu ao papai noel</h4>
        <form action="backend/insert.php" method="post">
            <div class="insert">
                <div class="day">
                    <p>DATA</p>
                    <input type="text" name="date">
                </div>
                <div class="subject">
                    <p>MATÉRIA</p>
                    <input type="text" name="subject">
                </div>
                <div class="desc">
                    <p>DESCRIÇÃO</p>
                    <textarea type="text" name="description"></textarea>
                </div>
                <div class="urgency">
                    <p>URGENTE?</p>
                    <input type="text" name="urgency">
                </div>
                <div class="team">
                    <p>Turma</p>
                    <input type="text" name="team">
                </div>
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
    <footer>
        <h4>Desenvolvido por <a href="https://github.com/joaby-oliveira">Joaby Oliveira</a> e <a href="https://github.com/GabrielRagonhaRodrigues">Gabriel Rodrigues</a></h4>
        <h5>Todos direitos reservados &copy</h5>
    </footer>
</body>
</html>
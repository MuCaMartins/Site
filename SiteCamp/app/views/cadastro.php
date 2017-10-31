<!DOCTYPE html>
<html lang="en">

<head>
    <title>Página de cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <link href="public/UI Kits/uikit.css" rel="stylesheet" type="text/css"/>
    <script src="public/js/jquery.js"></script>
    <script src="public/js/uikit.min.js"></script>
    <script src="public/js/uikit-icons.min.js"></script>
</head>

<body>
<div class="uk-container">
    <body bgcolor="#3ADF00">
        <center><h2><font face="Georgia">Emira Championship</font></h2></center>
        <hr>
                <center><h2><font face="Verdana">Inserir Times</font></h2></center>

                <div align="center">
    <table border="1" width="50%" bgcolor="#000000">
    <tr><td bgcolor="#82FA58"><h4><strong><center><font face="Garamond">"Agora, insira o nome e o patrocinador do time, um<br>
    de cada vez, e clique em <"GUARDAR">.<br>

    Quando estiver tudo pronto, clique em
    <br><"FINALIZAR">."</font></center></strong></h4></td></tr>
    </table>
    </div>
<br><br>
                <form method="post" action="/salvar">

                    <div class="form-group">
                        <label for="nome">Time:</label><br>
                        <input class="form-control" type="text" name="nome" id="nome" value="" size="30" maxlength="30" placeholder="Nome do Time">
                    </div>
<br>
                    <div class="form-group">
                        <label for="patrocinador">Patrocinador:</label><br>
                        <input class="form-control" type="text" name="patrocinador" value="" size="30" maxlength="30" placeholder="Nome do Patrocinador">
                    </div>
                    </form>
<br><br>
                    <button class="uk-button" type="">Guardar</button>

                    <a href="cj"><button type="submit" class="uk-button">Finalizar</button></a>

            </div>
        </div>
    </div>
    </div>

</body>

</html>
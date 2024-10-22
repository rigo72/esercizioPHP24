<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function contaCaratteri($corpoEmail){
            $lunghezzaCorpoEmailCaratteri = strlen($corpoEmail);
            return $lunghezzaCorpoEmailCaratteri;
        }
        $emailMittente = $_POST["email_mittente"];
        $emailDestinatario = $_POST["email_destinatario"];
        $oggettoEmail = $_POST["oggetto_email"];
        $corpoEmail = $_POST["corpo_email"];
        echo "<h1>Mail creata</h1> <br> <h3>Informazioni</h3> <br> <div style='background-color:lightblue;'>";
        echo "<p>Indirizzo email mittente: {$emailMittente}</p> <p>Indirizzo email destinatario: {$emailDestinatario}</p> <p>Oggetto della email: {$oggettoEmail}</p> </div>";
        echo "<h3>Corpo dell' email</h3> <br> <div style='background-color:orange; width:50%;'> <p>{$corpoEmail}</p> </div> <br> <hr>";
        $lunghezzaCorpoEmailCaratteri = contaCaratteri($corpoEmail);
        echo "<div style='backgroung-color:grey;'> <h3>{$lunghezzaCorpoEmailCaratteri}</h3> </div>";
    ?>
</body>
</html>
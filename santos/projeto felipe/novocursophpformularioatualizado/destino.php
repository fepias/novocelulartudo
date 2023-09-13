<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header><h1>Resultado</h1></header>
    <main>

    <?php
    $idnome = $_GET["nome"];
    $email = $_GET["email"];
    
    echo "<p>-Será um prazer te hospedar, <strong>$idnome</strong> ;
        <br>-Enviaremos seu voucher em seu email: <strong>$email</strong>;
        <br> -Lembre-se de trazer a coleira para seu pet.";    
    ?>
       <li> Use cinto de segurança na viagem";</li>

    </main>
    

</body>
</html>
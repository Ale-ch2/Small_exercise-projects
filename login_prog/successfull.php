<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    include "../php/connection.php";
    $nome_utente = $_SESSION['nome_utente'];
    echo "<br>";
    echo $nome_utente;
    
    ?>
</body>
</html>
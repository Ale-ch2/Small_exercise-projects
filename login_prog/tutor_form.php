<?php
$nome_utente = $_POST['nome_utente'];
$pwd = $_POST['pwd'];

session_start();
include "connection.php";

$sql = "SELECT nome_utente, pwd FROM utenti WHERE nome_utente = '$nome_utente'  AND pwd =  '$pwd'"; // chiedere riguardo a questa linea e a proposito di sanificare i dati

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION["nome_utente"] = $nome_utente;
    header('Location: successfull.php');
    exit(); //Perchè exit in questo modo? cos'è?
} else {
    header('Location: unsuccessfull.htm');
    exit();
}

<?php
$email=$_REQUEST["email"];
$nome=$_REQUEST["nome"];
$cognome=$_REQUEST["cognome"];
$password=$_REQUEST["password"];

$hostname="localhost";
$username="root";
$pwd_server="matec";
$db="mionegozio";

$conn= mysqli_connect ($hostname, $username, $pwd_server, $db);
if (!$conn)
	die("Errore nella connessione al server $hostname");

$seldb = mysqli_select_db ($conn, $db);
if (!$seldb)
	die ("Errore nella connessione all'archivio $db");

$query="INSERT INTO utenti (email, nome, cognome, password)
			VALUES ('$email', '$nome', '$cognome', '$password')";
			
$result = mysqli_query($conn, $query);
if (!$result)
	die ("Errore nella registrazione dell'utente: $query");

header('location:index.php');
exit();








?>
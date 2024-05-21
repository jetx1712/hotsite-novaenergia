<?php
$servername = "just2077.justhost.com"; 
$username = "brfastco_novaenergia"; 
$password = "8sNnud,#Hl7b"; 
$dbname = "brfastco_novaenergia"; 

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
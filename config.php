<?php

// Setto i parametri di connessione al DB

$db_connect_params = [
    'mysql_host' => 'localhost',
    'mysql_user' => 'root',
    'mysql_password' => ''
];

// Istanzio un nuovo oggetto sqli per connettermi

$db_connect = new mysqli(
    $db_connect_params['mysql_host'],
    $db_connect_params['mysql_user'],
    $db_connect_params['mysql_password']
);

// Controllo che la connessione sia avvenuta, altrimenti restituisco un errore

if($db_connect->connect_error) { die($db_connect->connect_error); }

// Creo il DB

$sql_instruction = 'CREATE DATABASE IF NOT EXISTS gestione_libreria';

if(!$db_connect->query($sql_instruction)) { die($db_connect->connect_error);}

// Seleziono il DB

$sql_instruction = 'USE gestione_libreria';

$db_connect->query($sql_instruction);

// Creo la tabella

$sql_instruction = 'CREATE TABLE IF NOT EXISTS libri (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titolo VARCHAR(255) NOT NULL,
    autore VARCHAR(255) NOT NULL,
    anno_pubblicazione INT(4) NOT NULL,
    genere VARCHAR(255)
)';

if(!$db_connect->query($sql_instruction)) { die($db_connect->connect_error);}


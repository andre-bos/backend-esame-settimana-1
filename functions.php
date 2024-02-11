<?php

require_once 'config.php';

function validaDati($datiForm) {

    // Creo un array 'errori' vuoto dove raccoglierò tutti gli errori di validazione
    $errori = [];

    // Filtro i dati dal form e li salvo nelle rispettive variabili

    $titolo = trim(htmlspecialchars($datiForm['titolo']));
    $autore = trim(htmlspecialchars($datiForm['autore']));
    $anno = trim(htmlspecialchars($datiForm['anno']));
    $genere = trim(htmlspecialchars($datiForm['genere']));

    // Verifico ogni variabile campo e per ognuna setto un errore nell'array 'errori' se il valore non rispetta i requisiti

    if(strlen($titolo) < 2 || strlen($titolo) === 0) {
        $errori['titolo'] = 'Il campo titolo è vuoto o ha una lunghezza inferiore a due caratteri';
    }

    if(strlen($autore) < 2 || strlen($autore) === 0) {
        $errori['autore'] = 'Il campo autore è vuoto o ha una lunghezza inferiore a due caratteri';
    }

    if(strlen($anno) !== 4 || !is_numeric($anno) || $anno > date("Y")) {
        $errori['anno'] = "L'anno inserito non è valido";
    }

    if(strlen($genere) < 2 || strlen($genere) === 0) {
        $errori['genere'] = 'Il campo genere è vuoto o ha una lunghezza inferiore a due caratteri';
    }

    // Salvo i dati inseriti in sessione: se l'array '$errori' è vuoto, i dati sono validi e dalla sessione verranno salvati nel database,
    //altrimenti, rimarranno disponibili in sessione per poter essere corretti e inviati nuovamente dall'utente tramite il form.


    session_start();
    $_SESSION['datiInseriti'] = [
        'titolo' => $titolo,
        'autore' => $autore,
        'anno' => $anno,
        'genere' => $genere
    ];
    session_write_close();

    if(empty($errori) || $_REQUEST['action'] === 'add_book') {
        inserisciDati($_SESSION['datiInseriti']);
        session_start();
        $_SESSION['success'] = 'Dati inseriti correttamente';
        session_write_close();
        header('Location: add_book.php');
    } else {
        session_start();
        $_SESSION['errori'] = $errori;
        header('Location: add_book.php');
    }
}

if (empty($errori) || $_REQUEST['action'] === 'edit') {
    modificaDati($id);
}

function inserisciDati($dati) {
    global $db_connect;
    $sqlinstruction = "INSERT INTO libri (titolo, autore, anno_pubblicazione, genere) VALUES ('" . $dati['titolo'] . "', '" . $dati['autore'] . "', '" . $dati['anno'] . "', '" . $dati['genere'] . "');";
    $db_connect->query($sqlinstruction);
}

function modificaDati($id) {

}
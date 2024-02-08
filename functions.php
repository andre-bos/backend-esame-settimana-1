<?php

function validaLibro($datiLibro) {
    // Creo un array $errori vuoto dove raccoglierò tutti gli errori di validazione

    $errori = [];

    // Inizio i controlli

    if(strlen((trim(htmlspecialchars($datiLibro['titolo']))) < 2 || strlen((trim(htmlspecialchars($datiLibro['titolo']))))) === 0) {
        $errori['titolo'] = 'Il campo titolo è vuoto o ha una lunghezza inferiore a due caratteri';
    }

    if(strlen((trim(htmlspecialchars($datiLibro['autore']))) < 2 || strlen((trim(htmlspecialchars($datiLibro['autore']))))) === 0) {
        $errori['autore'] = 'Il campo autore è vuoto o ha una lunghezza inferiore a due caratteri';
    }

    if(strlen(trim(htmlspecialchars($datiLibro['anno']))) !== 4 || !is_numeric($datiLibro['anno'])) {
        $errori['anno'] = "L'anno inserito non è valido";
    }
}
<?php

include_once 'partials/head.php';
include_once 'partials/navbar.php';
require_once 'config.php';

// Eseguo la query per ottenere tutti i record della tabella libri e salvo il risultato in $allbooks

$allbooks = $db_connect->query('SELECT * FROM libri');

?>

<body>
<?php

if ($allbooks->num_rows === 0) { ?>
    <h2 class="text-center text-danger fs-5 mt-5">Nessun libro presente!</h2>
<?php } elseif($allbooks) {
    $books = [];
    while ($row = $allbooks->fetch_assoc()) {
        array_push($books, $row);
    }
} { ?>

    <div class="my-3">
        <table class="table table-dark table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Autore</th>
                <th scope="col">Anno</th>
                <th scope="col">Genere</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($books as $book) { ?>
                <tr>
                    <td><?=$book['titolo']?></td>
                    <td><?=$book['autore']?></td>
                    <td><?=$book['anno_pubblicazione']?></td>
                    <td><?=$book['genere']?></td>
                    <td>
                        <a href="controller.php?action=edit&id=<?=$book['id']?>" class="btn btn-primary">Modifica</a>
                        <a href="controller.php?action=delete&id=<?=$book['id']?>" class="btn btn-danger">Cancella</a>
                    </td>
                </tr> <?php } ?>
            </tbody>
        </table>
    </div>
<?php }
include_once 'partials/footer.php';
?>
</body>

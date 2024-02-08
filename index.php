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
<?php } else {
    echo 'Ecco i libri';
}
include_once 'partials/footer.php';
?>
</body>

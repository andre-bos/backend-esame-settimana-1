<?php

include_once 'partials/head.php';
include_once 'partials/navbar.php';
require_once 'config.php';
?>

<body>
<div class="container">
    <div class="row">
        <h2 class="text-center mt-5">Aggiungi un libro</h2>
        <form class="mt-5" action="controller.php?action=add_book" method="post">
            <div class="mb-3">
                <div class="row g-3">
                    <div class="col-auto">
                        <label for="titolo" class="col-form-label">Titolo</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="titolo" name="titolo" class="form-control" aria-description="Titolo del libro">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row g-3">
                    <div class="col-auto">
                        <label for="autore" class="col-form-label">Autore</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="autore" name="autore" class="form-control" aria-describedby="autoreHelp">
                    </div>
                    <div class="col-auto">
                        <span id="autoreHelp" class="form-text">Inserisci nome e cognome dell'autore</span>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row g-3">
                    <div class="col-auto">
                        <label for="anno" class="col-form-label">Anno</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="anno" name="anno" class="form-control" aria-description="Anno di pubblicazione">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row g-3">
                    <div class="col-auto">
                        <label for="genere" class="col-form-label">Genere</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="genere" name="genere" class="form-control" aria-description="Genere letterario">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi libro</button>
        </form>

    </div>
</div>
<?php
include_once 'partials/footer.php';
?>
</body>
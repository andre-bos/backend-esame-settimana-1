<?php

session_start();

include_once 'partials/head.php';
include_once 'partials/navbar.php';
require_once 'config.php';

print_r($_SESSION['errori']);
print_r($_SESSION['success']);
?>

<body>
<div class="container">
    <div class="row">
        <h2 class="text-center mt-5">Aggiungi un libro</h2>
        <form class="mt-5" action="controller.php?action=edit" method="post">
            <div class="mb-3">
                <div class="row g-3">
                    <div class="col-auto">
                        <label for="titolo" class="col-form-label">Titolo</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="titolo" name="titolo" class="form-control" aria-description="Titolo del libro"
                               value="<?php
                               if (isset($_SESSION['datiInseriti']['titolo'])) {
                                   echo $_SESSION['datiInseriti']['titolo'];
                               }
                               ?>">
                    </div>
                    <?php
                    if (isset($_SESSION['errori']['titolo'])) { ?>
                        <div class="col-auto">
                            <p class="text-danger"><?=$_SESSION['errori']['titolo'] ?></p>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="mb-3">
                <div class="row g-3">
                    <div class="col-auto">
                        <label for="autore" class="col-form-label">Autore</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="autore" name="autore" class="form-control" aria-describedby="autoreHelp"
                               value="<?php
                               if (isset($_SESSION['datiInseriti']['autore'])) {
                                   echo $_SESSION['datiInseriti']['autore'];
                               }
                               ?>">
                    </div>
                    <div class="col-auto">
                        <span id="autoreHelp" class="form-text">Inserisci nome e cognome dell'autore</span>
                    </div>
                    <?php
                    if (isset($_SESSION['errori']['autore'])) { ?>
                        <div class="col-auto">
                            <p class="text-danger"><?=$_SESSION['errori']['autore'] ?></p>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="mb-3">
                <div class="row g-3">
                    <div class="col-auto">
                        <label for="anno" class="col-form-label">Anno</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="anno" name="anno" class="form-control" aria-description="Anno di pubblicazione"
                               value="<?php
                               if (isset($_SESSION['datiInseriti']['anno'])) {
                                   echo $_SESSION['datiInseriti']['anno'];
                               }
                               ?>">
                    </div>
                    <?php
                    if (isset($_SESSION['errori']['anno'])) { ?>
                        <div class="col-auto">
                            <p class="text-danger"><?=$_SESSION['errori']['anno'] ?></p>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="mb-3">
                <div class="row g-3">
                    <div class="col-auto">
                        <label for="genere" class="col-form-label">Genere</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="genere" name="genere" class="form-control" aria-description="Genere letterario"
                               value="<?php
                               if (isset($_SESSION['datiInseriti']['genere'])) {
                                   echo $_SESSION['datiInseriti']['genere'];
                               }
                               ?>">
                    </div>
                    <?php
                    if (isset($_SESSION['errori']['genere'])) { ?>
                        <div class="col-auto">
                            <p class="text-danger"><?=$_SESSION['errori']['genere'] ?></p>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi libro</button>
        </form>

        <?php
        if (isset($_SESSION['success'])) { ?>
            <p class="text-success"><?=$_SESSION['success'] ?></p>
        <?php }
        ?>

        <?php
        session_destroy();
        ?>

    </div>
</div>
<?php
include_once 'partials/footer.php';
?>
</body>
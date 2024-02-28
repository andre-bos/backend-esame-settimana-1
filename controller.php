<?php
require_once 'functions.php';

if($_REQUEST['action'] === 'edit_book' || $_REQUEST['action'] === 'add_book') {
    validaDati($_REQUEST);
}

if($_REQUEST['action'] === 'delete') {
    cancellaDati($_REQUEST['id']);
}
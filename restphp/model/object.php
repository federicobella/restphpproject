<?php
//require della connession

function esercenti()
{
    $db = require('../database/db.php');
    $q = "SELECT nome, email, id_amministratore FROM amministratore";
    $r = @mysqli_query($db, $q); // Run the query.
    return ($r);
}
function utenti()
{
    $db = require('../database/db.php');
    $q = "SELECT id_utente, email, punti_accumulati FROM utente";
    $r = @mysqli_query($db, $q); // Run the query.
    return ($r);
}
function questionari()
{
    $db = require('../database/db.php');
    $q = "SELECT id_questionario, id_amministratore, nome, punti, metodo_invio FROM questionario";
    $r = @mysqli_query($db, $q); // Run the query.
    return ($r);
}

?>

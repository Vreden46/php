<?php
// Prüfe, ob der Referrer gesetzt ist
if (isset($_SERVER['HTTP_REFERER'])) {
    $referrer = $_SERVER['HTTP_REFERER'];
    echo "Der Referrer ist: $referrer";
} else {
    echo "Kein Referrer gefunden.";
}
?>

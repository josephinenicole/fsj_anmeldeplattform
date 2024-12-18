<?php

$db=new mysqli('localhost','root','','fsj_anmeldungen');


// Überprüfen, ob die Verbindung erfolgreich ist
if ($db->ping()) {
    echo "Verbindung erfolgreich!";
} else {
    echo "Fehler: " . $db->error;
}
?>

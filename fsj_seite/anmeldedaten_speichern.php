
<?php

    require 'db.php'; // Verbindung zur Datenbank

    include("header.html"); // Header einfügen

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        // Formulardaten sichern und validieren
        $vorname = trim($_POST['vorname']);
        $nachname = trim($_POST['nachname']);
        $age = $_POST['age'] ?? null;
        $origin = $_POST['origin'] ?? null;
        $address = trim($_POST['address']);
        $email = trim($_POST['email']);
        $area = $_POST['area'] ?? null;
    
        if (empty($vorname) || empty($nachname) || empty($age) || empty($origin) || empty($address) || empty($email) || empty($area)) {
            die("Bitte fülle alle Felder aus!");
        }
    
        $db->begin_transaction();
        try {
            // Bewerberdaten einfügen
            $stmt_bewerber = $db->prepare("
                INSERT INTO bewerber (vorname, nachname, alter_kategorie, herkunft, adresse, email) 
                VALUES (?, ?, ?, ?, ?, ?)");
            $stmt_bewerber->bind_param('ssssss', $vorname, $nachname, $age, $origin, $address, $email);
            $stmt_bewerber->execute();
    
            // Bewerber-ID holen
            $bewerber_id = $db->insert_id;
    
            // Anmeldedaten einfügen
            $stmt_anmeldung = $db->prepare("
                INSERT INTO anmeldungen (bewerber_id, einsatzbereich, anmeldedatum) 
                VALUES (?, ?, NOW())");
            $stmt_anmeldung->bind_param('is', $bewerber_id, $area);
            $stmt_anmeldung->execute();
    
            $db->commit();
    
            // Weiterleitung an overview.php mit Parameter
            header("Location: overview.php?bewerber_id=$bewerber_id");
            exit;
    
        } catch (Exception $e) {
            $db->rollback();
            die("Fehler bei der Anmeldung: " . $e->getMessage());
        }
    }

    include("footer.html"); // Footer einfügen

?>



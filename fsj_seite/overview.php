<?php
    require 'db.php';

    include("header.html"); // Header einfügen

    if (isset($_GET['bewerber_id'])) {
        $bewerber_id = intval($_GET['bewerber_id']);
    
        // Bewerberdaten holen
        $stmt = $db->prepare("
            SELECT b.vorname, b.nachname, b.alter_kategorie, b.herkunft, b.adresse, b.email, a.einsatzbereich 
            FROM bewerber b 
            JOIN anmeldungen a ON b.bewerber_id = a.bewerber_id 
            WHERE b.bewerber_id = ?");
        $stmt->bind_param('i', $bewerber_id);
        $stmt->execute();
        $stmt->bind_result($vorname, $nachname, $age, $origin, $address, $email, $area);
        $stmt->fetch();
        $stmt->close();
    } else {
        die("Keine gültige Bewerber-ID übergeben.");
    }
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Übersicht Anmeldedaten</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h3>Schön, dass du dich für einen Freiwilligendienst angemeldet hast.</h3>
        <p>Hier sind deine Angaben:</p>
    
        <p><b>Vorname:</b> <?= htmlspecialchars($vorname) ?></p>
        <p><b>Nachname:</b> <?= htmlspecialchars($nachname) ?></p>
        <p><b>Alter:</b> <?= htmlspecialchars($age) ?></p>
        <p><b>Herkunft:</b> <?= htmlspecialchars($origin) ?></p>
        <p><b>Adresse:</b> <?= htmlspecialchars($address) ?></p>
        <p><b>Interessensbereich:</b> <?= htmlspecialchars($area) ?></p>
        <p><b>E-Mail-Adresse:</b> <?= htmlspecialchars($email) ?></p>
    
        <hr>
        <p>Wir melden uns in 3 bis 5 Werktagen mit weiteren Infos zu deiner Bewerbung.</p>

        <hr>
        <div class="gallery">
            <?php
                include("gallery.php")
            ?>
        </div>
        <hr>
    </body>
    </html>    

    <?php
        include("footer.html"); 
    ?>
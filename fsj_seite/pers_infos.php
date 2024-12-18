<?php
    include("header.html"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freiwilligendienst - Bewerber/-innen Infos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <form action="anmeldedaten_speichern.php" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
    <div class="wrapper">
      <div class="item">
        <!-- Vorname, Nachname und Alter -->
      <label><b>Vorname:</b></label><br>
      <input type="text" name="vorname" placeholder="Vorname" required><br>
      <br>

      <label><b>Nachname:</b></label><br>
      <input type="text" name="nachname" placeholder="Nachname" required><br>
      <br> 

      <label><b>Alter: Wie alt bist du?</b></label><br>
      <input type="radio" name="age" value="unter_15"> Ich bin unter 15<br>
      <input type="radio" name="age" value="15_25" > Ich bin zwischen 15 und 25<br>
      <br>
      </div>
      
      <!-- Herkunft und Adresse-->
      <div class="item">
      <p>* Wähle eine dieser Optionen aus</p>
      <label><b>Herkunft: Woher kommst du?</b></label><br>
      <input type="radio" name="origin" value="inland"> Ich komme aus dem Inland<br>
      <input type="radio" name="origin" value="ausland"> Ich komme aus dem Ausland<br>

       <br>

      <label><b>Adresse:</b></label><br>
      <input type="text" name="address" placeholder="Straße, PLZ, Stadt" required><br>

      <br>
      </div>

      <!-- Interessensbereich -->
      <div class="item">
      <p>* Wähle eine dieser Optionen aus</p>
      <label><b>In welchem Bereich möchtest du dich einsetzen?</b></label><br>
      <input type="radio" name="area" value="sozial"> Soziales/Kultur<br>
      <input type="radio" name="area" value="politik"> Politik<br>
      <input type="radio" name="area" value="umwelt"> Umwelt/Natur<br>
      <br>
      </div>

      <div class="item">
      <!-- E-Mail und Absenden-Button -->
      <label><b>Deine E-Mail-Adresse?</b></label><br>
      <input type="email" id="email" name="email" placeholder="email@mail.de" required> 
      <br>
      <input type="submit" name="submit" value="Anmeldung senden">
      </div>  
    </div>      
  </form>

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


<?php
    include("header.html"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freiwilligendienst</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   <h3>Du interessierst dich für einen Freiwilligendienst?</h3> 
   <p>Dann bist du hier genau richtig!</p> 
   <p>Ein Freiwilliges Soziales Jahr (FSJ) ist die perfekte Möglichkeit für junge Menschen zwischen 15 und 27 Jahren, sich sozial zu engagieren,</p>
   <p>wertvolle Erfahrungen zu sammeln und sich persönlich weiterzuentwickeln. Ob im sozialen, kulturellen oder ökologischen Bereich – hier kannst du etwas bewegen!</p> 

   <p>Melde dich <a href="login.php">hier</a> auf der Webseite an.</p>
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
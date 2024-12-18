<?php
    include("header.html"); 

// Pseudo-Login
    if(isset($_POST["login"])){

        $username = $_POST["username"];  

        if(empty($username)){
            echo "Vergiss nicht deinen Vor- und Nachnamen einzugeben"; 
        }
        else{
        // Weiterleitung zur nächste Seite ( Anmeldung FSJ)
           header("Location: pers_infos.php");  // 
           exit();
         }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freiwilligendienst Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   <h3>Schön, dass du einen Freiwilligendienst machen willst.</h3> 
   <p>Es geht gleich los. Melde dich auf der Webseite an und erstelle ein Konto.</p> 
   <form action="login.php" method="post">
        <label>Gib deinen Vor- und Nachnamen ein:</label>
        <input type="text" name="username"> 
        <input type="submit" name="login" value="Log in"> <br>
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
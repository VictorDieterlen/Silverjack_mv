<?php
    include 'functions.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Silverjack</title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Inline|Bungee+Shade" rel="stylesheet">  
    </head>
    <body>
        <h1>Silverjack</h1>
        <?php
            play();
        ?>
        <form>
             <input class="button" type="submit" value="Play Again"/>
        </form>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title> mini-site-routing </title> 
    </head>
    <body>
        <header>
            <h1> Mini Site </h1>
            <a href = "" > Accueil </a>
            <a href = "" > Page 2 </a>
            <a href = "" > Page 3 </a>
        </header>
        <?php
        var_dump ($_GET);
            if ($_GET ["page1"] == "Accueil !" ) {
                echo "link";
             }
            if ($_GET ["page2"] == "Page 2 !" ) {
                echo "link";
             }
            if ($_GET ["page3"] == "Page 3 !" ) {
                echo "link";
             }
        ?>
    </body>
</html>

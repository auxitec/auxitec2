<?php
include "./functions/ClassAutoLoader.php";
spl_autoload_register('ClassAutoLoader');
?>


<!DOCTYPE html>
<html lang=""fr-FR">
    <head>
        <meta charset=""utf-8" />
        <title>Auxitec Blog</title>
        <link rel="stylesheet" href="./assets/css/style.css" />
    </head>

    <body>
    <div id="container">


        <?php
            include "./includes/header.php";

            echo "<h1>ceci est le corps de mon index.php</h1>";

            $page = (isset($_GET['page']) && $_GET['page'] != "") ? $page = $_GET['page'] : "accueil";
            $page = "./includes/" . $page . ".inc.php";
            $files = glob("./includes/*.inc.php");

            /*
            //echo "<pre>";
            //print_r($files);
            //echo $page;
            */

            if (in_array($page, $files)){
                include $page;
            }
            else
                include "./includes/accueil.inc.php";

            include "./includes/footer.php";
        ?>
    </div>
    </body>
</html>


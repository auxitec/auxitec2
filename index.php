<?php
include "./includes/header.php";

/*
echo "<h1>ceci est le corps de mon index.php</h1>";

if (isset($_GET['page']) && $_GET['page'] != "")
{
    $page = $_GET['page'];
}
else
{
    $page = "accueil";
}
*/

$page = (isset($_GET['page']) && $_GET['page'] != "") ? $page = $_GET['page'] : "accueil";

$page = "./includes/" . $page . ".inc.php";


$files = glob("./includes/*.inc.php");

if (in_array($page, $files)){
    include $page;
}
else
    include "./includes/accueil.inc.php";


/*
echo "<pre>";
print_r($files);
echo $page;
*/

include "./includes/footer.php";
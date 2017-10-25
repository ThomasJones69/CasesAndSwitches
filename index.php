<?php
$K_Keuze = $_GET['weekdag'];

switch($K_Keuze){
    case "Maandag":
        echo "Wij eten erwtensoep";
        break;
    case "Dinsdag":
        echo "Vandaag hebben we heerlijke wraps";
        break;
    case "Woensdag":
        echo "Vandaag is het gehakt dag";
        break;
    case "Donderdag":
        echo "Friet staat er voor vandaag op het menu";
        break;
    case "Vrijdag":
        echo "Vis op het menu";
        break;
    case "Zaterdag":
        echo "Mag Thomas kiezen";
        break;
    case "Zondag":
        echo "Hosti's!!!!!";
        break;
}
?>

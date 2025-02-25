<?php
require_once("games.php");

$view = "";
if(isset($_GET["view"]))
    $view=$_GET["view"];


switch($view){
    case "all":
       
        $games = new GamesRestKezelo();
        $games->getAllGames();
        break;
    
    case "single":
        $games = new GamesRestKezelo();
        $games->getGamesById($_GET["id"]);
        break;

    case "tipus":
        $games = new GamesRestKezelo();
        $games->getGamesByType($_GET["tid"]);
    
    default:
        $games = new GamesRestKezelo();
        $games->GetFault();
        break;
    
}
?>
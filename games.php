<?php
require_once 'dbvezerlo.php';

class Games
{
    private $games=[];

    public function __construct()
    {
        $query=" SELECT `g_ID`, name, pic FROM Games";
        $dbvez= new DBVezerlo();
        $this->games=$dbvez->executeSelectQuery($query);
        $dbvez->closeDB();
    }

    public function GetAllGames()
    {
        return $this->games;
    }

    public function GetGamesById($gameId)
    {
       $query = "SELECT g_ID, name, pic FROM `games` WHERE g_ID=".$gameId;
       $dbvez = new DBVezerelo();
       $this->games=$dbvez->executeSelectQuery($query);
       $dbvez->closeDB();
       return $this->games;
    }

    public function GetGamesByType($typeName){
        $query = "SELECT g_ID, name, pic FROM `games` INNER JOIN `type` ON games.type_ID=type.t_ID WHERE type.name='".$typeName."'";
        $dbvez = new DBVezerelo();
        $this->games=$dbvez->executeSelectQuery($query);
        $dbvez->closeDB();
        return $this->games;
    }
}
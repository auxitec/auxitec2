<?php

class Requetes
{
    private $dsn = "mysql:dbname=auxitec;host=localhost;charset=utf8";
    private $user = "auxitec";
    private $password = "auxitec";
    private $db;

    function __construct()
    {
        try {
            $this -> db = new PDO($this -> dsn, $this -> user, $this -> password);
            $this -> db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);   // mode de retour des résultats des requêtes (Ici OBJ)
                                                                                                        //  :: pour méthodes static ou pour constantes (Ici constantes)
        }
        catch (PDOException $e){
            Log::LogWrite($e -> getMessage());
        }
    }


    function insert($sql)
    {
        return $this -> db -> exec($sql);                                                               // exec pour Insert, Delete ou Update           query pour Select
    }

    function select($sql)
    {
        return $this -> db -> query($sql);
    }


    function __destruct()
    {
        // TODO: Implement __destruct() method.
        unset($this -> db);
    }
}
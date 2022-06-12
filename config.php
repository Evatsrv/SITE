<?php 
        
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=suno", "root", "");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }

?>
<?php
/**
 * User: jurrian Dijkstra
 * Date: 3-4-2019
 * Time: 11:45
 */

include_once 'Connection.php';

try{
    $database = new Connection();
    $db = $database->openConnection();

    //Create with sql a table
    $sql = "CREATE TABLE IF NOT EXISTS `Student` ( `ID` INT NOT NULL AUTO_INCREMENT , `name`VARCHAR(40) NOT NULL , `last_name` VARCHAR(40) NOT NULL , 
            `email` VARCHAR(40)NOT NULL , PRIMARY KEY (`ID`)) ";

     // use exec() because no results are returned
    $db->exec($sql);
    echo "Table Student created succesfully";

    $database->closeConnection();
}catch (PDOException $e){
    echo "There is some problem in connection: " . $e->getMessage();
}
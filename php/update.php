<?php
/**
 * User: jurrian Dijkstra
 * Date: 3-4-2019
 * Time: 12:07
 */
include_once 'Connection.php';

try{
    $database = new Connection();
    $db = $database->openConnection();

    $sql = "UPDATE `student` SET `name`= 'Jurrian2.0' , `last_name` = 'Dijkstra2.0' , `email` = 'info@jurriand.nl' WHERE `id` = 19";

    $affectedrows = $db->exec($sql);

    if (isset($affectedrows)){
        echo "Record has been successfully updated";
    }
}catch (PDOException $e){
    echo "There is some problem in connection: " . $e->getMessage();
}

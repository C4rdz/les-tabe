<?php
/**
 * User: jurrian Dijkstra
 * Date: 3-4-2019
 * Time: 12:12
 */
include_once 'Connection.php';

try{
    $database = new Connection();
    $db = $database->openConnection();

    $sql = "DELETE FROM student WHERE `id` = 20";
    $affectedrows = $db->exec($sql);
    if (isset($affectedrows)){
        echo "Record has been successfully deleted";
    }
}catch (PDOException $e){
    echo "There is some problem in connection: " . $e->getMessage();
}
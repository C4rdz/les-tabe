<?php
/**
 * User: jurrian Dijkstra
 * Date: 3-4-2019
 * Time: 12:01
 */

include_once 'Connection.php';

try{
    $database = new Connection();
    $db = $database->openConnection();
    $sql = "SELECT * FROM student";
    foreach ($db->query($sql) as $row){
        echo " ID: ".$row['ID'] . "<br>";
        echo " Name: ".$row['name'] . "<br>";
        echo " Last Name: ".$row['last_name'] . "<br>";
        echo " Email: ".$row['email'] . "<br><br>";
    }
}catch (PDOException $e){
    echo "There is some problem in connection: " . $e->getMessage();

}
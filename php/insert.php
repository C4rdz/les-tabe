<?php
/**
 * User: jurrian Dijkstra / Koen van den Broek
 * Date: 3-4-2019
 * Time: 11:50
 */
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$gebruikersnaam = $_POST['gebruikersnaam'];
$wachtwoord = $_POST['wachtwoord'];
$gender = $_POST['gender'];
include_once 'Connection.php';

try{
    $database = new Connection();
    $db = $database->openConnection();

    // inserting data into create table using prepare statement to prevent from sql injections
    $stm = $db->prepare("INSERT INTO user 
    (Voornaam,Achternaam,E-mail,ID,Gebruikersnaam,Wachtwoord,Gender,Rank,Activated) 
    VALUES 
    ( :Voornaam,:Achternaam,:E-mail,:ID,:Gebruikersnaam,:Wachtwoord,:Gender,:Rank,:Activated)"
    );

    //inserting data
    $stm->execute(array(
        ':Voornaam' => $voornaam , 
        ':Achternaam' => $achternaam , 
        ':E-Mail' => $email , 
        ':ID' => uniqid() , 
        ':Gebruikersnaam' => $gebruikersnaam , 
        ':Wachtwoord' => $wachtwoord , 
        ':Gender' => $gender ,
        ':Rank' => 0)
    );

    echo "New record created succesfully";


}catch (PDOException $e){
    echo "There is some problem in connection: " . $e->getMessage();
}
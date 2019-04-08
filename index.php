<!DOCTYPE html>
<html>
<head>
<?php require 'php/Connection.php'?>
</head>
<body>
<!--<h1>Hello World</h1>-->
</body>
</html>

<?php

try{
    $database = new Connection();
    $db = $database->openConnection();
}catch (PDOException $e){

}
?>
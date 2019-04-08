<?php
/**
 * User: Jurrian Dijkstra
 * Date: 2-4-2019
 * Time: 11:45
 */
//
//    class Connection{
//
//        public $prop1 = "Hello World!";
//
//        public function __construct()
//        {
//            echo 'The class "', __CLASS__,'" was initiated!<br />';
//        }
//
//        public function __destruct()
//        {
//            echo 'The class "', __CLASS__, '" was destroyed.<br />';
//        }
//
//        public function __toString()
//        {
//            echo "Using the toString method: ";
//            return $this->prop1 . "<br />";
//        }
//
//        public function setProperty($newval){
//            $this->prop1 = $newval;
//        }
//
//        public function getProperty(){
//            return $this->prop1 . '<br />';
//        }
//    }
//
//    class Connection2 extends Connection {
//
//        public function __construct(){
//            echo "A new constructor in " . __CLASS__ . ".<br />";
//        }
//
//        public function newMethod(){
//            echo "From a new method in " . __CLASS__ .".<br />";
//        }
//    }
//
//    $newobj = new Connection2();
//
//    echo $newobj->newMethod();
//
//    echo $newobj->getProperty();

Class Connection{

    private $server = "mysql:host=localhost;dbname=databsews";
    private $user = "root";
    private $pass = "";

    private $options = array(PDO::ATTR_ERRMODE =>
    PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

    protected $con;

    public function openConnection(){
        try {
            $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);

            echo 'connection is successfully made <br/><br/>';

            return $this->con;
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }

    public function closeConnection(){
        $this->con = null;
    }
}
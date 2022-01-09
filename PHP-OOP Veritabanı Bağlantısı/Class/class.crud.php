<?php
require_once 'dbconfig.php';
class crud
{
    private $db;
    private $dbhost = DBHOST;
    private $dbuser = DBUSER;
    private $dbpassword = DBPWD;
    private $dbname = DBNAME;




    function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname . ';charset=utf8', $this->dbuser, $this->dbpassword);
            // echo "Connection Successfully";
        } catch (Exception $e) {

            die("Something Went Wrong :(" . $e->getMessage());
        }
    }
}

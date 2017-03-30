<?php

class Database
{
    /*
     * Define a static property that hold class instance
     */

    private static $dbh;

    /*
     * Create and return only one instance of this class
     */    
    public static function getInstance()
    {
        if(empty(Database::$dbh)){
            Database::$dbh = new Database();
        }
        return Database::$dbh;
    }

    //make a constructor private so this class cannot be instantiate
    private function __construct()
    {
        ;
    }
    
    public function getSql(){
        return "SELECT * FROM some_table";
    }
}

$dbh = Database::getInstance();

echo $dbh->getSql() .PHP_EOL;


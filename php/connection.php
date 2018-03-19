<?php
/**
 * Created by PhpStorm.
 * User: SJB
 * Date: 22/8/17
 * Time: 14:27
 */

function db_connect() {

    // Define connection as a static variable, to avoid connecting more than once
    static $connection;

    // Try and connect to the database, if a connection has not been established yet
    if(!isset($connection)) {
        // Load configuration as an array. Use the actual location of your configuration file
        $config = parse_ini_file('config.ini');
        $SERVER = "127.0.0.1";
        $connection = mysqli_connect($SERVER,$config['username'],$config['password'],$config['dbname']);
        
    }

    // If connection was not successful, handle the error
    if($connection === false) {
        // Handle error - notify administrator, log to a file, show an error screen, etc.
        return mysqli_connect_error();
    }
    return $connection;
}


?>
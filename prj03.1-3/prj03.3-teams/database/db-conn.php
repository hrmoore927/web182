<?php

function dbConnect() 
{

  // set up for using PDO locally
  $user = 'root';
  $pass = '';
  $host = 'localhost';
  $dbname = 'bowling';

  $dsn = "mysql:host=$host;dbname=$dbname";

  try {
        /*
        * create a new database object 
        * and return it to the call
        */

        return new PDO($dsn, $user, $pass); 

      /*
      * This error trapping is from chaper 7. You can see
      * from the code that $e is an object an that is has
      * a method called getMessage. 
      */
      } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
        exit;
      }
}

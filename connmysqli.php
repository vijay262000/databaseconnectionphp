<?php
echo "welcome connection of database in php<br>";
/*1.MYSQLi extension
2. PDO
*/
$servername ="localhost";
$username ="root";
$password ="";

//create a connection

$conn = mysqli_connect($servername, $username, $password);

if(!$conn)
{
            die( "sorry we failed to connect:". mysqli_connect_error());
}
else
{
            echo "connection is successfull!";
}


?>
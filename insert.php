<?php
if(isset($_POST['name']))
{
    $SERVER ="localhost";
    $username ="root";
    $password ="";
    $db = "base";

    $connection=mysqli_connect($SERVER,$username,$db);
    if(!$connection)
    {
        die(mysqli_connect_error());
    }
    echo "connected";
}
?>
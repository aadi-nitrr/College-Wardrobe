<?php
    function connectDb($database="collegewardrobe", $server="localhost:3307", $username="root", $password="")
    {
        return mysqli_connect($server, $username, $password, $database);
    }
?>
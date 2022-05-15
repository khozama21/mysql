<?php
$myconnection= new mysqli('localhost','root','','fruits');




if ($myconnection->connect_errno){
    echo 'connection has failed';
}






?>
<?php
include "connection.php";

$name=$_POST['name'];
$price=$_POST['price'];
$qnty=$_POST['qnty'];
$color=$_POST['color'];
$weight=$_POST['weight'];
$desc=$_POST['desc'];


$query="INSERT INTO fruits (name,price,quantity,color,weight,description)
values('$name','$price','$qnty','$color','$weight','$desc')";



if(mysqli_query($myconnection,$query))
{
    header("Location:index.html");
}else{
    echo 'error:  '. mysqli_errno($myconnection);
    
}

$query2="UPDATE fruits
SET name = 'orange', color = 'orange'
WHERE id ='3'";

if(mysqli_query($myconnection,$query2))
{
    header("Location:index.html");
}else{
    echo 'error:  '. mysqli_errno($myconnection);
    
}

$query3="DELETE FROM fruits WHERE id='5';";

if(mysqli_query($myconnection,$query3))
{
    header("Location:index.html");
}else{
    echo 'error:  '. mysqli_errno($myconnection);
    
}



?>
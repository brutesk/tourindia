<?php
$destination = $_POST['destination'];
$people = $_POST['people'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];


//database connection
$conn = new mysqli('localhost','root','','enquire');
if ($conn->connect_error)
{
    die('connection failed :' $conn->connect_error);
}
else{
       $stmt=$conn->("insert into registration(destination,people,checkin,checkout)");
       values(?,?,?,?);
       $stmt->bind_param("siii,$destination,$people,$checkin,$checkout");
       $stmt->execute();
       echo"We will reach you out soon.";
       $stmt->close();
       $conn->close();
}
?>
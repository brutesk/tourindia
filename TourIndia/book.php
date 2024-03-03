<?php
$name = $_POST['name'];
$person = $_POST['person'];
$place = $_POST['place'];
$contact = $_POST['contact'];
$email= $_POST['email'];
$acontact= $_POST['acontact'];

//database connection
$conn = new mysqli('localhost','root','','book');
if ($conn->connect_error)
{
    die('connection failed :' $conn->connect_error);
}
else{
       $stmt=$conn->("insert into book now (name,person,place,contact,email,acontact)");
       values(?,?,?,?);
       $stmt->bind_param("sisisi,$name,$person,$place,$contact,$email,$acontact");
       $stmt->execute();
       echo"We will reach you out soon......";
       $stmt->close();
       $conn->close():
}
?>

<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phno=$_POST['phno'];

$connection=new mysqli('localhost','root','','test1');
if($connection->connect_error){
    die('connection Failed:'.$connection->connect_error);
}
else{
    $stmt=$connection->prepare("insert into userinfo(name,email,Phoneno)
    values(?,?,?)");
    $stmt->bind_param("ssi",$name,$email,$phno);
    $stmt->execute();
    echo "registration successful";
    $stmt->close();
    $connection->close();
}
?>
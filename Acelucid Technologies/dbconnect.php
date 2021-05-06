<?php

$employeeName=$_POST['empName'];
$email=$_POST['email'];
$number=$_POST['phoneNumber'];
$Address=$_POST['address'];




$conn= new mysqli('localhost','root','','test');

if(conn->connection_error){
    echo"conn->connection_error";
}else{
    $stmt=$conn->prepare("insert into Employee(employeeName,email,number,Address)values(?,?,?,?)");
    $stmt->bind_param("sssssi",$employeeName,$email,$number,$Address);
    $execval=$stmt->execute();
    echo $execval;
    echo"Employee Details Added Succesfully";
    $stmt->close();
    $conn->close();

}
?>
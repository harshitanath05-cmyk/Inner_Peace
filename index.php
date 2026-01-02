<?php
$conn = mysqli_connect("localhost","root","","dummy99");

$name = "";
$email = "";
$subject = "";
$message = "";
if(!$conn){
    echo("Database connection failed!");
}  

if($_SERVER['REQUEST_METHOD']==='POST'){
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

    $fun ="INSERT INTO dummy19(name , email ,subject ,message) VALUES('$name' , '$email' ,'$subject' ,'$message')";
    if(mysqli_query($conn , $fun))
    {
        echo 'Data Inserted.';
    }else{
        echo 'Data not inserted.'.mysqli_error($conn);
    }

}

?>
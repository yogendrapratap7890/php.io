<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("connection to this database due to ". mysqli_connect_error());
}
$age = $_POST['age'];
$gender = $_POST['gender'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$donation = $_POST['donation'];


// echo"connection sucessfully";
$sql = " INSERT INTO `donate4`.`donate` (`time`, `name`, `age`, `gender`, `email`, `phone`, `donation`) VALUES (current_timestamp(),'$name', '$age', '$gender', '$email', '$phone', '$donation')";
// echo $sql;
if($con->query($sql)==true){
    $insert= true;
    echo"successfully enterd your details";
}
else{
    echo"ERROR:$sql<br>$con->error";
}

$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks for donation</title>
    <style>
        body{
            background-color: rgb(164, 157, 170);
        }
        h1{
    text-align: center;
    color: green;
    font-size: 2em;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
}
span{
    align-items: center;
}
    </style>
</head>
<body>
    <h1 color="green" >Click "Donate now" button to donate</h1>
  <span>
  <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JRGbhHKZD9cZit" async >
    </script></span>
</body>
</html>
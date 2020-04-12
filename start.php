<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$age = $_POST['age'];
$msg = $_POST['message'];
$submit = $_POST['submit'];


// save this into a file .....

$message = "Dear [website owner] <br /> You have a new detail added";


$message .= "<strong> The contact detail are below: </strong>" ;
$message .= "First Name : " . $first_name . "<br />";
$message .= "Last Name : " . $last_name . "<br />";
$message .= "Age : " . $age . "<br />";
$message .= "Message : " . $msg . "<br />";



//


$myfile = fopen($first_name, ".txt", "w") or die("unknown");
fwrite($myfile, $message);
fclose($myfile);

?>
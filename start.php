<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$age = $_POST['age'];
$msg = $_POST['message'];



// save this into a file .....

$message = "You have one new contact added   
";
$message .= "The contact detail are below
 " ;
$message .= "First Name : " . $first_name ;
$message .= "Last Name : " . $last_name ;
$message .= "Age : " . $age ;
$message .= "Message : ". $msg;



//


$myfile = fopen($first_name,"w", ".txt") or die("unknown");
fwrite($myfile, $message);
fclose($myfile);

?>
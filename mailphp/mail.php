<?php

//veriavel setting
$name = $_REQUEST['name'] ;
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
// check input fields
if (empty($name) || empty($email) || empty($message))
{
   echo "please fill all the fields "; 
}

else {
    mail("ritik@digitalrk.in", $subject , $message , "From : $name < $email>" );
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <h3 class="back"> <a href="http://digitalrk.in">click here</a></h3>
        
    </div>
</body>
</html>



';
}

?>
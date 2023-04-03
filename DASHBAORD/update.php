<?php
include 'connection.php';
    if (isset($_POST['send']))
    {
        $name = $_POST['name'];
        
        // echo $name;
        // die();
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $id = $_GET['id'];

        $q =" UPDATE `complaincentre` SET `id`= $id,`name`='$name',`email`='$email',`phone`='$phone',`subject`='$subject',`message`='$message' WHERE id =$id ";
        mysqli_query($con, $q);

        header('location:display.php');
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>



<div class="container">
	<div class="row">
		<form action="#" method="post" class="smart-green">
    <h1> Update Complain Centre
        <span>Please fill all the texts in the fields.</span>
    </h1>
    <label>
        <span>Your Name :</span>
        <input id="name" type="text" name="name" placeholder="Your Full Name" />
        
       
    </label>
   
    <label>
        <span>Your Email :</span>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" />
        
    </label>
    
    <label>
        <span>Your Phone:</span>
        <input id="phone" type="text" name="phone" placeholder="Valid Phone Number" />
        
    </label>
    
    <label>
        <span>Subject :</span><input id="subject" type="text" name="subject" placeholder="Your Full Subject" />
        
    </label>  
    
    <label>
        <span>message :</span>
        <textarea id="message" name="message" placeholder="Your Message to Us"></textarea>
        
    </label>
        
    <label>
        <span> </span>
        <button type="submit" name="send" class="button" value="Send">Send</button>
    </label>
        </form>
    </div>
</div>
</body>
</html>    


   



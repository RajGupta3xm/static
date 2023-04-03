<?php
    include 'connection.php';

    $nameerr = "";
    $emailerr = "";
    $phoneerr = "";
    $subjecterr = "";
    $messageerr = "";

    if (isset($_POST['send']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if(empty($name))
        {
            $nameerr = "Please Fill Username";
        }

        else if(empty($email)) 
        {
            $emailerr = "Please Fill Email";
        }

        else if(empty($phone)) 
        {
            $phoneerr = "Please Fill phone Number";
        }
        else if(empty($subject)) 
        {
            $subjecterr = "Please Fill Subject";
        }
        else if(empty($message)) 
        {
            $messageerr = "Please Fill Massage";
        }
        
        else
        {
            $q = "INSERT INTO `complaincentre`( `name`, `email`, `phone`, `subject`, `message`) VALUES('$name','$email','$phone','$subject','$message')";
                
            $query = mysqli_query($con, $q);
        }

    }
        
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="insert.css">
</head>
<body>



<div class="container">
	<div class="row">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="smart-green" name="myfrom">
    <h1>Complain Centre
        <span>Please fill all the texts in the fields.</span>
    </h1>
    <label>
        <span>Your Name :</span>
        <input id="name" type="text" name="name" placeholder="Your Full Name" />
        <?= $nameerr?>
       
    </label>
   
    <label>
        <span>Your Email :</span>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" />
        <?= $emailerr?>
    </label>
    
    <label>
        <span>Your Phone:</span>
        <input id="phone" type="text" name="phone" placeholder="Valid Phone Number" />
        <?= $phoneerr?>
    </label>
    
    <label>
        <span>Subject :</span><input id="subject" type="text" name="subject" placeholder="Your Full Subject" />
        <?= $subjecterr?>
    </label>  
    
    <label>
        <span>message :</span>
        <textarea id="message" name="message" placeholder="Your Message to Us"></textarea>
        <?= $messageerr?>
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



<?php
    include 'connection.php';
    if(isset($_POST['send']))
    {
        $id = $_GET['id'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
</head>
<body>
    <div class="table">
        <div class="col-lg-12">
            <h1 class="h1center">User Display Data </h1>
            
            <?php
                    include 'connection.php';
                    $id = $_GET['id'];
                    $q = "SELECT * FROM `complaincentre` WHERE id=$id ";
                    $query = mysqli_query($con,$q);
                    $res = mysqli_fetch_array($query);
                   
                       
                    
            ?>
            <table  class="table table-bordered border-primary"">

            <tr>
            <th>Name:</th>
            <td><?php echo $res['name']?></td>
            </tr>

            <tr>
            <th>Email:</th>
            <td><?php echo $res['email'];?></td>
            </tr>

            <tr>
                <th>Phone</th>
                <td><?php echo $res['phone']?></td>
            </tr>

            <tr>
                <th>Subject</th>
                <td><?php echo $res['subject']?></td>
            </tr>

            <tr>
                <th>Message</th>
                <td><?php echo $res['message']?></td>
            </tr>
          
            </table>

        </div>
    </div>
    
</body>
</html>
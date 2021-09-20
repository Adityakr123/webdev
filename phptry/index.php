<?php
$submit=0;
if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this databassed faliled due to".mysqli_connect_error());

    }
    $name = $_POST['name'];
    
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql="INSERT INTO `Trip`.`trip` (`name`, `age`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$email', '$phone', '$desc', current_timestamp());";
    
    if($con->query($sql)== true)
    {
        // echo"Successfully inserted";
        $submit=1;
    }
    else{
        echo"error: $sql <br> $con->error";
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
    <title>Welcome To Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="upes.jpg" alt="upes image" class="img">
    <div class="container">
        <h1>Welcome to Upes Us Trip Form</h1>
        <p> Enter your details and submit this form to confirm your participation in trip</p>
        <?php
            if($submit==1){ 
                echo "<p class='message'>Thankyou for filling the form we are happy to see you onboard</p>";
            }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here "></textarea>
            <button class="btn">Submit</button>
        </form>
        <!-- post is more sequre  in major casses post is used if u use get then ur data is visible on url -->
    </div>
    <script src="index.js"></script>
    
</body>
</html>
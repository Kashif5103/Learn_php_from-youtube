<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trip"; // Replace with your actual database name

    // Create a connection
    $con = mysqli_connect($server, $username, $password, $dbname);

    // Check connection
    if(!$con){
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    // Collect POST variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $description = $_POST['descruption'];  // Correct this if 'description' is intended

    // Insert query
    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
            VALUES ('$name', '$age', '$gender', '$email', '$phone', '$description', current_timestamp());";

    // Execute the query
    if($con->query($sql) === TRUE){
        // echo "Successfully inserted";
    } else {
        echo "Error: $sql <br> $con->error";
    }

    // Close the connection
    $con->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="University of Okara" srcset="">
    <div class="container">
        <h3>Welcome to the University of Okara trip form </h3>
        <p>Enter your detail and submit this form to conform your partception in the trip</p>
        <p class="submitmsg">
            Thanks for Submitting this form. We are happy to see you joining the Lahore trip
        </p>

        <form action="index.php" method="post">
           <input type="text" name="name" id="name" placeholder="Enter your name">
           <input type="text" name="age" id="age" placeholder="Enter your age">
           <input type="text" name="gender" id="gender" placeholder="Enter your gender">
           <input type="email" name="email" id="email" placeholder="Enter your Email">
           <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
           <textarea name="descruption" id="descruption" cols="30" rows="10"
           placeholder="Enter any other information hare"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button>  -->

           
        </form>

    </div>
    <script src="index.js"></script>
    

</body>
</html>
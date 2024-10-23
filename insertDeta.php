<?php


if(isset($_podt['name'])) { 
$serve = "localhost";
$username = "root";
$password = "";
$detabase = "hunza_trip";

// Connect to the database
$con = mysqli_connect($serve, $username, $password, $detabase);

if (!$con) {
    die("Connection to this database failed due to " . mysqli_connect_error());
} 

// Collect POST data
$name  = $_POST['name'];
$gender  = $_POST['gender'];
$age  = $_POST['age'];
$email  = $_POST['email'];
$phone  = $_POST['phone'];
$outher  = $_POST['desc'];


// SQL query to insert the form data into the database
$sql = "INSERT INTO `trip` (name, gender, age, email, phone, outher) VALUES ('{$name}', '{$gender}', {$age}, '{$email}', '{$phone}', '{$outher}')";

// Execute the query and check if it was successful
// if (mysqli_query($con, $sql)) {
//     // echo "Record inserted successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($con);
// }

if($con->query($sql) == true){
    echo "successfully inserted";
}else{
    echo "ERROR: $sql <br> $con=>error";
}

// Close the database connection
// mysqli_close($con);
$con->close();

}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trip for Hunza</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="bg">
      <img src="Feature-Hunza.jpg" alt="Hunza" class="imgggg" />
    </div>
    <div class="container">
      <h1>Wekcome to Hunza Gilgit-Baltistan</h1>
      <p>
        Enter your details and submit this to conform your pratipation in the
        trip
      </p>
      
      <p id="thanks" class="submitmsg">
        thanks for submiting your form, we are happy to see you joining us for
        thr hunza trip
      </p>

      <form action="./insertDeta.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter you name" />
        <input type="number" name="age" id="age" placeholder="Enter you age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="you gender "
        />
        <input
          type="text"
          name="email"
          id="gender"
          placeholder="Ente you email "
        />
        <input
          type="text"
          name="phone"
          id="phone"
          placeholder="Enter you phone "
        />
        <textarea
          type="textarea"
          name="desc"
          id="desc"
          placeholder="Enter any outher information"
        ></textarea>
        <button class="btn">submit</button>
        <!-- <button class="btn">reset</button> -->
      </form>
    </div>
    <script src="script.js"></script>
  </body>
</html>
 
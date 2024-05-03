<!DOCTYPE html>
<html lang="en">
<head >

<title>Humay lernt HTML</title>
<link rel="stylesheet" href="mystyle.css">
<script src="myScript.js"></script>
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<!-- Navigation bar on the left -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="https://reverberatory-hoist.000webhostapp.com">Homepage</a>
  <a href="photography.html">Photography</a> 
  <a href="plants.html">Get to know my plants &#127804;</a>
  <a href="guestbook.php"> Guestbook </a>
  <a href="contact.html">Contact</a>
</div>

<!-- an element to open the sidenav -->
<button id="open" class="open" onclick="openNav()"> <img src="hello.gif"> Open Menu </button>

<div id="main">
    <p style="text-align:center;margin-top:100px"> This page will include a comment section where users will be able to leave feedback.</p>
    
    
    
<!-- connecting to database -->
     <?php
    $host="localhost";
    $username="id21083063_humay";
    $passwort="Humay_57";
    $dbname="id21083063_comments";
    $conn=mysqli_connect($host, $username, $passwort, $dbname);
/*    
    if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
*/
    $sql = "SELECT user, comment FROM comments";
$result = $conn->query($sql);




//creating a form

// define variables and set to empty values
$name = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $comment = test_input($_POST["comment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Guestbook</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input class="comment" type="text" name="name" placeholder="anonymous user">
  <br><br>
  Comment: <textarea class="comment" name="comment" placeholder="leave a comment..." rows="4" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Leave comment">  
</form>
<br>

<?php
 if (!empty($comment)) {
     $sql = "INSERT INTO comments (user, comment)
VALUES ('$name', '$comment')";
 }


if ($conn->query($sql) === TRUE) {
  echo "You commented:" .$comment. ". Thank you for your feedback! <br>" ;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
          echo "<b> " .  $row["user"] .   "</b> commented <b> " . $row["comment"]. "</b> <br>";
    
  }
} else {
  echo "0 results";
}



$conn->close();
?>

    
   
</div>


    



</body>



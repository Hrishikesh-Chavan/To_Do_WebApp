<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","cwhphp") or die(mysqli_error());

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);
$Phone = $con->real_escape_string($_POST['contact']);
$comments = $con->real_escape_string($_POST['text']);

  //query to insert the variable data into the database
$sql="INSERT INTO contactus (name, email, phone, comments) VALUES ('".$Name."','".$Email."', '".$Phone."', '".$comments."')";

  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "Thank you! We will get in touch with you soon";
}

?>

<html>
<head>
<link rel="stylesheet" href="/crud/style.css" type="text/css" media="all" />
</head>
<body>
<h2>Contact Us</h2>
  
  <form class="form" action="/crud/contact.php" method="POST">
    
    <p class="username">
      <input type="text" name="name" id="name" placeholder="Enter your name" >
      <label for="name">Name</label>
    </p>
    
    <p class="useremail">
      <input type="text" name="email" id="email" placeholder="mail@example.com" >
      <label for="email">Email</label>
    </p>
    
    <p class="usercontact">
      <input type="text" name="contact" id="contact" placeholder="contact no." >
      <label for="contact">Phone number</label>
    </p>    
  
    <p class="usertext">
      <textarea name="text" placeholder="Write something to us" ></textarea>
                        <label for="text">Comments</label>
    </p>
    
    <p class="usersubmit">
      <input type="submit" name="submit" value="Submit" >
    </p>
  </form>
</body>
</html>
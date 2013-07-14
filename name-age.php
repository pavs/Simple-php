
<!DOCTYPE html>
<html>
<head>
   <title>Current Time:</title>
   <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>




<?php

/*
v.001:

 I am learning PHP and git. This piece of code is not meant to be take seriously.
 This simple code example asks for your name and age and prints it out.
 It also uses Twitter Bootsrap Css for simple styling.

 
 */


  if( $_POST["name"] || $_POST["age"] )
  {
     echo "Welcome ". $_POST['name']. "<br />";
     echo "You are ". $_POST['age']. " years old.";
     exit();
  }
?>

<br /><br />

<form action="<?php $_PHP_SELF ?>" method="POST" class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Name:</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Name" name="name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Age:</label>
    <div class="controls">
      <input type="text" id="inputPassword" placeholder="Age" name="age">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">Submit</button>
    </div>
  </div>
</form>


</body>
</html>


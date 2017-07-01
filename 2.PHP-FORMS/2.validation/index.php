<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Form Validation Example</title>
  </head>
  <body>
    <?php
    //define variables into empty values
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $name = input_name($_POST['name']);
      $email = input_name($_POST['email']);
      $gender = input_name($_POST['gender']);
      $comment = input_name($_POST['comment']);
      $website = input_name($_POST['website']);
    }

    function input_name($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
     ?>
<h2>PHP Form Validation Example</h2>
<form class="" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  Name : <input type="text" name="name" value="">
  <br/><br/>
  Email : <input type="text" name="email" value="">
  <br/><br/>
  website : <input type="text" name="website" value="">
  <br/><br/>
  Comment : <textarea name="comment" rows="5" cols="40"> </textarea>
  <br/><br/>
  Gender :
  <input type="radio" name="gender" value="Female"> Female
  <input type="radio" name="gender" value="Male"> Male
  <br/><br/>
  <input type="submit" name="sunmit" value="Submit">

  <?php
  echo "<br/>";
  echo "<h2>Your Input : <h2>";
  echo "$name";
  echo "<br/>";
  echo "$email";
  echo "<br/>";
  echo "$comment";
  echo "<br/>";
  echo "$gender";
  echo "<br/>";
  ?>
</form>

  </body>
</html>

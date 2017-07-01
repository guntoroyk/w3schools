<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Form Required Example</title>
    <style media="screen">
      .error {color: #FF0000;}
    </style>
  </head>
  <body>
    <?php
    //define variables and set to empty values
    $nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
    $name = $email = $website = $comment = $gender = "";

    function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

     if ($_SERVER["REQUEST_METHOD"] == "POST"){
       if (empty($_POST['name'])) {
         $nameErr = "Name is required";
       } else {
         $name = test_input($_POST['name']);
       }

       if (empty($_POST['email'])) {
         $emailErr = "Email is required";
       }else {
         $email = test_input($_POST['email']);
       }

       if (empty($_POST['website'])) {
         $websiteErr = "";
       } else {
         $website = test_input($_POST['website']);
       }

       if (empty($_POST['comment'])) {
         $commentErr = "";
       } else {
         $comment = test_input($_POST['comment']);
       }

       if (empty($_POST['gender'])) {
         $genderErr = "Gender is required";
       } else {
         $gender = test_input($_POST['gender']);
       }
     }
     ?>

     <h2>PHP Form Validation Example</h2>
     <p><span class="error"> * required field.</span></p>
     <form class="" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
       Name : <input type="text" name="name" value="">
       <span class="error">* <?php echo "$nameErr"; ?></span>
       <br/><br/>
       Email : <input type="text" name="email" value="">
       <span class="error">* <?php echo "$emailErr"; ?></span>
       <br/><br/>
       Website : <input type="text" name="website" value="">
       <br/><br/>
       Comment : <textarea name="comment" rows="5" cols="40"></textarea>
       <br/><br/>
       Gender :
       <input type="radio" name="gender" value="Male">Male
       <input type="radio" name="gender" value="Female">Female
       <span class="error">* <?php echo "$genderErr"; ?></span>
       <br/><br/>
       <input type="submit" name="submit" value="Submit">
     </form>

     <?php
     echo "<h2>Your Input :</h2>";
     echo "$name";
     echo "<br/>";
     echo "$email";
     echo "<br/>";
     echo "$website";
     echo "<br/>";
     echo "$comment";
     echo "<br/>";
     echo "$gender";
      ?>
  </body>
</html>

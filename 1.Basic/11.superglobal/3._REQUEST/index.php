<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Example of using REQUEST</title>
  </head>
  <body>
    <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      Name : <input type="text" name="fname">
      <input type="submit">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
          echo "Name is empty";
        } else {
          echo "$name";
        }
      }
    ?>
  </body>
</html>

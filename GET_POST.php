<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET-POST</title>
</head>
<body>

<form action="" method="post">
      Enter your favorite color : <input type="text" name="favColor">
      <input type="submit" name="submit" value="Check Now">
      <p>My favorite color is
        <?php
           if(isset($_POST['submit'])){
               $favColor = $_POST['favColor'];
               echo $favColor;
           }
        ?>
      </p>
</form>
    
</body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylesheet.css" >
    <title>traitement</title>
  </head>
  <body>
      <?php
        if (isset($_POST['username']) AND isset($_POST['password']) AND $_POST['usename'] == "#" AND $_POST['password'] == "codeurKiFFeur"){
          /* we check with isset that username and password were correctly sent */
          # code...
        }
        else {
          echo "username and/or password incorrect";
        }
      ?>
  </body>
</html>

<?php
session_start();

if(!isset($_SESSION["user"] )){
  header("location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cours</title>
</head>
<body>
    <h1>Bonjour <?php echo $_SESSION['nom']
?></h1>
 

 
</body>
</html>
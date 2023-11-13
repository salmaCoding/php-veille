
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php
                if(isset($_GET["error"])){
                    echo $_GET["error"];
                }

                    ?>
    <form method="post" action="validation.php">
        <input style="padding: 0.5rem;width: 16rem;" type="text" name="nom" placeholder="Entrer le nom s'il vous plait"><br></br>
        <input style="padding: 0.5rem;width: 16rem;" type="text" name="prenom" placeholder="Entrer le prenom s'il vous plait"><br></br>
        <input style="padding: 0.5rem;width: 16rem;" type="email" name="email" placeholder="Entrer le email s'il vous plait"><br></br>
        <button style="padding: 0.3rem;background-color: aquamarine;width: 5rem;" type="submit" name='send'>click here</button>
    </form>
</body>
</html>
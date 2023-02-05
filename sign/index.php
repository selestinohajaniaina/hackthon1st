<?php include('..\bdd.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sigin</title>
        <style><?php include('../login/style.css');?></style>
    </head>
    <body>
        <form method="post">
            <p>Sign in</p>
            <input type="text" name="num_mat" id="num_mat" placeholder="Your service number" autoselect required/>
            <input type="password" name="password" id="password" placeholder="Password" required/>
            <input type="submit" value="Sign in" name="signBtn">
            <a href="..\login\index.php">To register.</a>
        </form>
        <?php include('index_back.php');?>

</body>
</html>
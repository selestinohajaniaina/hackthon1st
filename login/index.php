<?php include('..\bdd.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style><?php include('style.css');?></style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <p>Login</p>
            <input type="file" name="photo" id="photo"/>
            <input type="text" name="num_mat" id="num_mat" placeholder="Your service number" required/>
            <input type="text" name="name" id="name" placeholder="Name" required/>
            <input type="text" name="surname" id="surname" placeholder="First name" required/>
            <select name="filiere" id="filiere">
                <option value="info">Info</option>
                <option value="BTP">BTP</option>
                <option value="Gestion">Gestion</option>
            </select>
            <input type="password" name="password" id="password" placeholder="your password" required>
            <input type="password" name="confirm" id="confirm" placeholder="Confirm your password" required/>
            <input type="submit" value="Login" name="loginBtn">
            <a href="..\sign\index.php">Sign in.</a>
        </form>
        <?php include('index_back.php');?>
</body>
</html>
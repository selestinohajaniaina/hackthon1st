<?php include('..\bdd.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenement</title>
    <style><?php include('../home/style.css');?></style>
    <style><?php include('style.css');?></style>
</head>
<body>
<header>
        <h1>Support</h1>
        <div class="menu">
            <a href="../home/index.php?num_mat=<?=$_GET['num_mat']?>">Home</a>
            <a href="../file/index.php?num_mat=<?=$_GET['num_mat']?>">File</a>
            <a href="../EDT/index.php?num_mat=<?=$_GET['num_mat']?>">EDT</a>
            <a href="#"style="border-bottom: #fff solid 5px;">Event</a>
        </div>
    </header>
    <footer>
        <div class="profil">
        <?php include('../home/profil.php');?>
        </div>
        <div class="event">
        <?php include('event.php');?>
        </div>
        <div class="liste">
          <?php include('../home/student.php');?>
        </div>

    </footer>
</body>
</html>
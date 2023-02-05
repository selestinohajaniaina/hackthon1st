<?php

//sign in Button onClick

if(isset($_POST["signBtn"])){
    
    //chaging variable
    $num_mat=$_POST['num_mat'];
    $password=$_POST['password'];

    //selection en bdd si existant
    $selection = $connection -> prepare("SELECT * FROM infoetu WHERE num_mat= :mat");
    $selection->execute([
        "mat"=> $num_mat
    ]);

    $nb_select=$selection->rowCount();
    if($nb_select==1){
        $fetch=$selection->fetch();
        $pass = $fetch["pass"];
        $num_mat=$fetch["num_mat"];
        $pass_hash = password_hash($_POST["password"],PASSWORD_BCRYPT);
        if(password_verify($pass,$pass_hash)){
            header("location:../home/index.php?num_mat=$num_mat");
        }
        else{
            ?>
                <script>alert("Mot de passe incorrecte");</script>
            <?php
        }
    }else{
        ?>
                <script>alert("Ce numero d'inscription est introuvable");</script>
            <?php
    }

    }
?>
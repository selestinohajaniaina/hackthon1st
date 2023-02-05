<?php

//selecting buton

if(isset($_POST["loginBtn"])){


    //chagin variable
    $num_mat=$_POST['num_mat'];
    $name=strtoupper($_POST['name']);
    $surname=$_POST['surname'];
    $filiere=$_POST['filiere'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    $photo=$_FILES["photo"]["name"];
    $upload="picture/".$photo;

    //
    if(!empty($num_mat) && !empty($name) && !empty($surname) && !empty($filiere) && !empty($password) && !empty($confirm)){

        if(empty($photo)){
            $photo="icon (8).png";
        }
        
        //verifier si deja inscrir
        $doublon = $connection -> prepare("SELECT * FROM infoetu WHERE num_mat = $num_mat ");
        $doublon -> execute();
        $nb_doublon = $doublon ->rowCount();
    
        if($nb_doublon > 0){
            echo "cette information existe deja";
        }else{  
    
            if($password==$confirm){
                //sinon insertion en bdd
            $insertion = $connection -> prepare("INSERT INTO infoetu(num_mat, nom, prenom, filiere, photo, pass) VALUES(:mat , :nam, :surname, :fil, :phot, :pswrd)");
            $insertion -> execute([
                "mat"=>$num_mat,
                "nam"=>$name,
                "surname"=>$surname,
                "fil"=>$filiere,
                "phot"=>$photo,
                "pswrd"=>$password
            ]);
            move_uploaded_file($_FILES["photo"]["tmp_name"],$upload);
            header("location:../home/index.php?num_mat=$num_mat");
            }else{
                ?>
                    <script>alert("les deux mots de passe sont obligatoirement \n identique.");</script>
                <?php
            }
    }
    //
    }

}
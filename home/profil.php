<?php
$num_mat=$_GET['num_mat'];
$selection = $connection -> prepare("SELECT * FROM infoetu WHERE num_mat=$num_mat");
$selection->execute();
$fetchprofil=$selection->fetch();
$photo=$fetchprofil['photo'];
$myName=$fetchprofil['nom'];
$mySurname=$fetchprofil['prenom'];
$filiere=$fetchprofil['filiere'];

?>
<img src="../login/picture/<?=$photo?>" id="myPhoto"/>
<span>Nom: <?=$myName?></span>
<span>Prenom: <?=$mySurname?></span>
<span>Filiere: <?=$filiere?></span>
<span>Matricule: <?=$num_mat?></span>
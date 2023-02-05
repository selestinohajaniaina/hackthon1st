<?php
$num_mat=$_GET["num_mat"];
$select = $connection -> prepare("SELECT * FROM infoetu WHERE num_mat=$num_mat");
$select->execute();
$fetchprofil=$select->fetch();
$filiere=$fetchprofil['filiere'];

$selectF = $connection -> prepare("SELECT * FROM fichier WHERE filiere= :fil");
    $selectF->execute([
        "fil"=>$filiere
    ]);
    $fetch=$selectF->fetchAll();
    $nbr=$selectF->rowCount();

    for($i=0;$i<$nbr;$i++){
        ?>
        <div class="listFichier">
            <span><b><?=$fetch[$i]['legend']?> :</b> </span>
            <span><?=$fetch[$i]['fileName']?></span>
            <a href="#" download="folder/<?=$fetch[$i]['fileName']?>"><img src="folder/icon/tel.jpg" class="tel" title="download"></a>
        </div>
        <?php
    }
    ?>
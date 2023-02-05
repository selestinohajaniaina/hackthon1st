<?php
$selection = $connection -> prepare("SELECT * FROM edt");
$selection->execute();

$fetch=$selection->fetchAll();

$nbr=$selection->rowCount();
for($i=0;$i<$nbr;$i++){
    ?>
    <div class="inter">
        <!-- <span>< ?=$fetch[$i]['filiere']?></span> -->
        <img src="img/<?=$fetch[$i]['img']?>" class="img"/>
        <a href="#" download="img/<?=$fetch[$i]['img']?>"><img src="../file/folder/icon/tel.jpg" class="tel" title="download"></a>
    </div>
    <?php
}
?>
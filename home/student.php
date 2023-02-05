<?php
$selection = $connection -> prepare("SELECT * FROM infoetu");
$selection->execute();

$fetch=$selection->fetchAll();

$nbr=$selection->rowCount();
for($i=0;$i<$nbr;$i++){
    ?>
    <div class="inter">
        <img src="../login/picture/<?=$fetch[$i]['photo']?>" id="photo"/>
        <span><?=$fetch[$i]['nom']?> <?=$fetch[$i]['prenom']?></span>
        <span><a href="http://"><img src="../file/folder/icon/msg.jpg" class="msg" title="send a message"></a></span>
    </div>
    <?php
}
?>
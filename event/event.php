<?php
$num_mat=$_GET["num_mat"];
$selection = $connection -> prepare("SELECT * FROM event");
$selection->execute();

$fetch=$selection->fetchAll();

$nbr=$selection->rowCount();
for($i=0;$i<$nbr;$i++){
    $legende=$fetch[$i]['legend'];
    $img=$fetch[$i]['img'];
    if($img==""){
        ?>
    <div class="post">
        <span>Admnistration:</span><br>
        <span><h1><?=$legende?></h1></span>
    </div>
    <?php
    }else{
    ?>
    <div class="post">
        <span>Admnistration:</span>
        <span><b><?=$legende?></b></span><br>
        <img src="img/<?=$img?>" id="photopost"/>
    </div>
    <?php
}
}
?>
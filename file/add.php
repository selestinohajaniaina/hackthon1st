<form method="post" enctype="multipart/form-data" class="addFile">
            <h6>Partager des documents</h6>
            <input type="text" name="legende" placeholder="Write something...">
            <input type="file" name="addfile" id="addfile">
            <input type="submit" value="partager" name="partager">
</form>
<?php  
if(isset($_POST["partager"])){
    $legende=$_POST["legende"];
    $addfile=$_FILES["addfile"]["name"];
    $num_mat=$_GET['num_mat'];

    $selection = $connection -> prepare("SELECT * FROM infoetu WHERE num_mat=$num_mat");
    $selection->execute();
    $fetchprofil=$selection->fetch();
    $filiere=$fetchprofil['filiere'];
    $upload="folder/".$addfile;

    if($addfile==""){
        echo "vide";
    }else{
        $inser=$connection->prepare("INSERT INTO fichier(num_mat, filiere, legend, fileName) VALUES(:mat, :fil, :leg, :fichName)");
        $inser->execute([
            "mat"=>$num_mat,
            "fil"=>$filiere,
            "leg"=>$legende,
            "fichName"=>$addfile,
        ]);
        move_uploaded_file($_FILES["addfile"]["tmp_name"],$upload);
        header("location:index.php?num_mat=$num_mat");
        echo "ok";
    }
}
?>
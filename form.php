<?php
if(isset($_POST["username"])){
    $nom = strip_tags($_POST['username']);
    if($nom === "james" || $nom === "James"){
        echo "Bond, James Bond";
    }
    else{
        echo "Bonjour $nom";
    }
}
?>
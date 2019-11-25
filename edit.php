<?php
    require("function.php");
    $stud = new stud ;
    $id = $_POST['id'];
    $n = $_POST['nom'];
    $p = $_POST['prenom'];
    $e = $_POST['email'];
    $ph = $_POST['phone'];
    $req= $stud->update($n,$p,$e,$ph,$id);
    header('Location: index.php');
?>
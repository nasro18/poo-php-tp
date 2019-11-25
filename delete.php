<?php
    require("function.php");
    $stud = new stud ;
    $id = $_GET['id'];
    $do= $stud->Supp($id);
    header('Location: index.php');
?>
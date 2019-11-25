<?php
   include 'function.php';
   $e=new stud;
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $phon=$_POST['phone'];
   $req=$e->ajout($nom,$prenom,$email,$phon);
   
    header ('location:index.php');

  ?>



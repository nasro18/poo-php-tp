<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container "> 
    <nav class="navbar navbar-expand-sm bg-success justify-content-center">
<div class="jumbotron">
            <h3>Liste des étudiants DSI22 g1 </h3>
        </div>
</nav>
        <table class="table">
    <ul class="breadcrumb">   
  <li><a href="creat.php">nouvo Etudiante</a></li>
</ul>
  <tr class="table-primary">
        <td>id</td>
        <td>nom</td>
        <td>prenom</td>
        <td>email</td>
        <td>phone</td>

    </tr>
    </thead>
    <?php
    require 'function.php';
    $etud=new stud;
    $aff=$etud->aff_etud();
    while($data=$aff->fetch()){

        echo '<tr>';
              echo '<td>' .$data['id'].'</td>';
              echo '<td>' .$data['nom'].'</td>';
              echo '<td>' .$data['prenom']. '</td>' ;
              echo '<td>' .$data['email']. '</td>' ;
              echo '<td>' .$data['phone']. '</td>' ;
              echo '<td><a href="update.php?id='.$data['id'].'"><i class="">&nbsp;Editer</i></a>&nbsp;&nbsp;';
                        echo '<a href="delete.php?id='.$data['id'].'"><i class="">&nbsp;Supprimer</i></a></td>';
              echo '</tr>';

    }

     ?>
 </table>



 </div>





 
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
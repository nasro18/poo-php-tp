<?php
class con_bd 
{
private $lhost="localhost";
private $dbname="bddsi22-tp3";
private $user="root";
private $pwd="";
public $cnx=null ;
function connectbd()  {
 try{
    $this->cnx = new PDO ('mysql:host='.$this->lhost.';dbname='.$this->dbname,$this->user,$this->pwd);
 }catch (PDOException $e ){
  echo $e->getMessage() ; 
}
  return ($this->cnx);
}
}
?>
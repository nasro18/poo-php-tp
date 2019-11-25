<?php
require "conx.php";
  /*class etudiante */
        class stud{
            public $cnx;
            /* constracteur*/

            public function __construct ()
            {
                $bd= new con_bd;
                $this->cnx=$bd->connectbd();
            }
            /* end */

            public function aff_etud(){
                try{
                    $req='SELECT * FROM etudiante';
                    $res=$this->cnx->prepare($req);
                    $res->execute();
                return $res;
                }catch(PDOException $e){
                    echo $e->getMessage();
                

            }
        }

        public function ajout($n,$p,$e,$ph)
        {try{
            $req=" INSERT INTO etudiante (nom,prenom,email,phone) VALUES ('$n','$p','$e','$ph')" ;
            $res = $this->cnx->prepare ($req);
            $res->execute();
            return $res ;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
        }

        public function Idstud($i)
        { try {
            $req=" SELECT *FROM etudiante WHERE id='$i' " ;
            $res=$this->cnx->prepare($req);
            $res->execute();
            return $res;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
            
        }

        public function update($n,$p,$e,$ph,$id){
            try{
               $req = "UPDATE etudiante SET nom ='$n', prenom = '$p', email = '$e', phone = '$ph ' WHERE id = '$id'";
               $res = $this->cnx->prepare ($req);
               $res->execute();
               return $res ;
         
            }catch(PDOException $e){
                echo $e->getMessage() ;
             }  
           }     
           public function Supp($id){
            try{
                $req = "DELETE FROM etudiante WHERE id='$id'";
                $res = $this->cnx->prepare ($req);
                $res->execute();
                return $res ;
            }catch(PDOException $e){
                echo $e->getMessage() ;
             }  
           } 
        



    }
?>
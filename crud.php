<?php
    class crud{
        private $db;
        function __construct($conn){
            $this ->db = $conn;
        
        }
        public function insert($name,$location,$destination,$num)
        {
            //exception handling 
            try 
            {
                $sql = "INSERT INTO zuber (Name,Location,Destination,Telephone,) VALUES (:name,:location,:destination,:tele)";
                $stmt= $this->db->prepare($sql);
                $stmt->bindparam (':name',$name);
                $stmt->bindparam (':location',$location);
                $stmt->bindparam (':destination',$destination);
                $stmt->bindparam (':num',$num);
                
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
                
            }

        } 
        
    }
?>
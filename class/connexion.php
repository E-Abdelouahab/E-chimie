<?php 
 class connexion{
    protected $host ='localhost';
    protected $dbname='echimie';
    protected $username='root';
    protected $password='admin1';
    
    protected function Connect(){
        try{
            $conn=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);  
           }

           catch (PDOException $e){
            echo $e->getMessage();
                                  }
           return $conn;
                                }
              }

?>
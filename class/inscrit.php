<?php
ob_start();
    include_once("connexion.php");

                class inscrit extends connexion{
//add

                    public function insertinscrit($name,$email,$phone,$filier){
                        $conn=$this->Connect();
                        $query = "INSERT INTO club VALUES (NULL,'".$name."','".$email."','".$phone."','".$filier."')";
                        $conn->query($query);
                        if($query =! 0){
                            echo"<script>alert('We receive you message we gonna reply you ASAP')</script>";
                        }

                        }



                    }
ob_end_flush();
?>
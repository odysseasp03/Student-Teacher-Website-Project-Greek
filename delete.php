<?php 

    require_once("connection.php");



if(isset($_GET['Del']))
         {
             $TheID = $_GET['Del'];
             $query = " delete from neaforma where The_ID = '".$TheID."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:announcementsT.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:announcementsT.php");
         }
         
?>
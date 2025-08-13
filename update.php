<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $TheID = $_GET['GetID'];
        $TheNumber = $_POST['number'];
        $TheDate = $_POST['date'];
        $TheTheme = $_POST['theme'];
        $TheText = $_POST['text'];

        $query = " update neaforma set The_Number = '".$TheNumber ."', The_Date='".$TheDate."',The_Theme='".$TheTheme."', The_Text='".$TheText."' where The_ID='".$TheID."'";
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
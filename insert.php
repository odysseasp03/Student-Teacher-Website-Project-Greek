<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['number']) || empty($_POST['date']) || empty($_POST['theme']) || empty($_POST['text']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $TheNumber = $_POST['number'];
            $TheDate = $_POST['date'];
            $TheTheme = $_POST['theme'];
            $TheText = $_POST['text'];

            $query = " insert into neaforma (The_Number, The_Date, The_Theme, The_Text) values('$TheNumber','$TheDate','$TheTheme','$TheText')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:announcementsT.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:forma.php");
    }



?>
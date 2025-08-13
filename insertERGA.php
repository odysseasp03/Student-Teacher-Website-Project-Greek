<?php

    require_once("connectionERGA.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['number']) || empty($_POST['point']) || empty($_POST['name']) || empty($_POST['given']) || empty($_POST['date']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $TheNumber = $_POST['number'];
            $ThePoint = $_POST['point'];
            $TheName = $_POST['name'];
            $TheGiven = $_POST['given'];
            $TheDate = $_POST['date'];

            $query = " insert into neaformaerga (The_Number, The_Point, The_Name, The_Given, The_Date) values('$TheNumber','$ThePoint','$TheName','$TheGiven','$TheDate')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:forma.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:formaERGA.php");
    }

    



?>

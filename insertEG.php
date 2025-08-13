<?php

    require_once("connectionE.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['number']) || empty($_POST['title']) || empty($_POST['preview']) || empty($_POST['name']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $TheNumber = $_POST['number'];
            $TheTitle = $_POST['title'];
            $ThePreview = $_POST['preview'];
            $TheName = $_POST['name'];

            $query = " insert into neaformaeg (The_Number, The_Title, The_Preview, The_Name) values('$TheNumber','$TheTitle','$ThePreview','$TheName')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:documentsT.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:formaEG.php");
    }



?>
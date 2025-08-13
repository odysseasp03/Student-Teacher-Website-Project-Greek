<?php 

    require_once("connection.php");
    $TheID = $_GET['GetID'];
    $query = " select * from neaforma where The_ID='".$TheID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        
        $TheID  = $row['The_ID'];
        $TheNumber  = $row['The_Number'];
        $TheDate = $row['The_Date'];
        $TheTheme = $row['The_Theme'];
        $TheText = $row['The_Text'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Registration Form</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Φόρμα επεξεργασίας Ανακοίνωσης</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?GetID=<?php echo $TheID ?>" method="post">
                                <input type="number" class="form-control mb-2" placeholder=" TheNumber " name="number" value="<?php echo $TheNumber ?>">
                                <input type="text" class="form-control mb-2" placeholder=" TheDate " name="date" value="<?php echo $TheDate ?>">
                                <input type="text" class="form-control mb-2" placeholder=" TheTheme " name="theme" value="<?php echo $TheTheme ?>">
                                <input type="text" class="form-control mb-2" placeholder=" TheText " name="text" value="<?php echo $TheText ?>">
                                <button class="btn btn-primary" name="update">update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
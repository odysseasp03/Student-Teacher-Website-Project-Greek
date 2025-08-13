<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Αποστολή e-mail μέσω web φόρμας</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3">Αποστολή e-mail μέσω web φόρμας</h3>
                        </div>
                        <div class="card-body">

                            <form action="estalthike.php" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Αποστολέας: " name="number">
                                <input type="text" class="form-control mb-2" placeholder="  Θέμα: " name="date">
                                <input type="text" class="form-control mb-2" placeholder=" Κείμενο: " name="theme">
                                
                                <button class="btn btn-primary" name="submit">Αποστολή</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
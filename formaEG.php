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
                            <h3 class="bg-success text-white text-center py-3"> Φόρμα προσθήκης εγγράφου</h3>
                        </div>
                        <div class="card-body">

                            <form action="insertEG.php" method="post">
                                <input type="number" class="form-control mb-2" placeholder=" Νούμερο εγγράφου " name="number">
                                <input type="text" class="form-control mb-2" placeholder=" Τίτλος εγγράφου " name="title">
                                <input type="text" class="form-control mb-2" placeholder=" Περιγραφή εγγράφου " name="preview">
                                <input type="text" class="form-control mb-2" placeholder=" Ονομα/θέση εγγράφου " name="name">
                                <button class="btn btn-primary" name="submit">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
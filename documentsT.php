<?php 

             require_once("connectionE.php");
             $query = " select * from neaformaeg ";
             $result = mysqli_query($con,$query);

        ?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Αρχική σελίδα</title>
		<link rel="stylesheet" href="mycss.css">
	</head>
	<body>
		<header><h1>Έγγραφα μαθήματος</h1></header>
		<div class="content">
		<nav>
		<a href="teacher_home.php">Αρχική σελίδα</a><br><br>

		<a href="announcementsT.php">Ανακοινώσεις</a><br><br>

		<a href="communicationT.html">Επικοινωνία</a><br><br>

		<a href="documentsT.php">Έγγραφα μαθήματος</a><br><br>

		<a href="homeworkT.php">Εργασίες</a><br><br>

		<a href="logout.php">Αποσύνδεση</a><br><br>
		</nav>
		<main>
		<a href="formaEG.php">Προσθήκη νέου εγγράφου</a><br><br>

		<p>&nbsp;&nbsp;━━━━━━━━━━━━━━━━━━━━━


		<!DOCTYPE html>
         <html lang="en">
        <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta http-equiv="X-UA-Compatible" content="ie=edge">
           
             <title>View Records</title>
              </head>
              <body class="bg-dark">

	           <div class="container">
		  <div class="row">
			<div class="col m-auto">
				<div class="card mt-5">
					<table class="table table-bordered">
						<tr>
							
						    
							<td> ΝΟΥΜΕΡΟ ΕΓΓΡΑΦΟΥ  </td>
							<td> ΤΙΤΛΟΣ </td>
							<td> ΠΕΡΙΓΡΑΦΗ </td>
							<td> ΟΝΟΜΑ/ΘΕΣΗ ΑΡΧΕΙΟΥ  </td>
							
						</tr>

						<?php 
								
								while($row=mysqli_fetch_assoc($result))
								{
									
									
									$TheNumber  = $row['The_Number'];
									$TheTitle = $row['The_Title'];
									$ThePreview = $row['The_Preview'];
									$TheName = $row['The_Name'];
						?>
								<tr>

								    
									<td><?php echo $TheNumber  ?></td>
									<td><?php echo $TheTitle ?></td>
									<td><?php echo $ThePreview ?></td>
									<td><?php echo $TheName ?></td>
									
                        
									
								</tr>        
						<?php 
								}  
						?>                                                                    
							   

					</table>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
             <p>&nbsp;&nbsp;━━━━━━━━━━━━━━━━━━━━━

		    <br><h2>Τίτλος εγγράφου 1</h2>

			<p>&nbsp;&nbsp;Περιγραφή: <Περιγραφή του περιεχομένου><br><br>

			&nbsp;&nbsp;<a href="file1.doc">Download</a><br>

			<p>&nbsp;&nbsp;━━━━━━━━━━━━━━━━━━━━━
            
			  <h2>Τίτλος εγγράφου 2</h2>
            
            <p>&nbsp;&nbsp;Περιγραφή: <Περιγραφή του περιεχομένου><br><br>

			&nbsp;&nbsp;<a href="file2.doc">Download</a>

			<p>&nbsp;&nbsp;━━━━━━━━━━━━━━━━━━━━━<br><br><br>
             
               <center><a href="#top"> top </a></center> 
			</p>
              </main>
		</main>
		</div>
		
	</body>
</html>

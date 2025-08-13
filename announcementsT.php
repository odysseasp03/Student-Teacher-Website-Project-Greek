<?php 

             require_once("connection.php");
             $query = " select * from neaforma ";
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
		<header><h1>Ανακοινώσεις</h1></header>
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
		<a href="forma.php">Προσθήκη νέας ανακοίνωσης</a><br><br>
		<p>&nbsp;&nbsp;━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
		

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
							
						    <td> ID  </td>
							<td> ΑΝΑΚΟΙΝΩΣΗ  </td>
							<td> ΗΜΕΡΟΜΗΝΙΑ </td>
							<td> ΘΕΜΑ </td>
							<td> ΚΕΙΜΕΝΟ </td>
							
						</tr>

						<?php 
								
								while($row=mysqli_fetch_assoc($result))
								{
									
									$TheID  = $row['The_ID'];
									$TheNumber  = $row['The_Number'];
									$TheDate = $row['The_Date'];
									$TheTheme = $row['The_Theme'];
									$TheText = $row['The_Text'];
						?>
								<tr>

								    <td><?php echo $TheID  ?></td>
									<td><?php echo $TheNumber  ?></td>
									<td><?php echo $TheDate ?></td>
									<td><?php echo $TheTheme ?></td>
									<td><?php echo $TheText ?></td>
									<td><a href="edit.php?GetID=<?php echo $TheID ?>">επεξεργασία</a></td>
                                    <td><a href="delete.php?Del=<?php echo $TheID ?>">διαγραφή</a></td>
                        
									
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
             
               <br><br><br><center><a href="#top"> top </a></center> 
			</p>
              </main>
		</main>
		</div>
		
	</body>
</html>

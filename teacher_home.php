<?php
session_start();
include 'connect.php';
if(isset($_SESSION['user_data']))
	if($_SESSION['user_data']['usertype']!=1){
		header("Location:student_home.php");
	}

	$data=array();
	$qr=mysqli_query($con,"select * from users where usertype='2'");
	while($row=mysqli_fetch_assoc($qr)){
		array_push($data,$row);
	}

?>



<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Αρχική σελίδα</title>
		<link rel="stylesheet" href="mycss.css">
	</head>
	<body>
		<header><h1>Αρχική σελίδα</h1></header>
		<div class="content">
		<nav>
		<a href="teacher_home.php">Αρχική σελίδα</a><br><br>

		<a href="announcementsT.php">Ανακοινώσεις</a><br><br>

		<a href="communicationT.html">Επικοινωνία</a><br><br>

		<a href="documentsT.php">Έγγραφα μαθήματος</a><br><br>

		<a href="homeworkT.php">Εργασίες</a><br><br>

		<a href="logout.php">Αποσύνδεση</a><br><br>
		</nav>
		<main><p>&nbsp;&nbsp;Καλωσόρισμα και εισαγωγικό κείμενο που θα περιγράφει τους 

			<p>&nbsp;&nbsp;στόχους (π.χ ιστοχώρος για εκμάθηση HΤΜL) και τις επιμέρους

			<p>&nbsp;&nbsp;ιστοσελίδες του site (δηλ. τι περιέχεται στις ιστοσελίδες:

			<p>&nbsp;&nbsp;Ανακοινώσεις, Επικοινωνία, Έγραφα μαθήματος, Εργασίες).<br><br>

			&nbsp;&nbsp;&nbsp;&nbsp;<img  src="elearning.jpg" alt="elearning" width="400" height="300">
              </main>
		</main>
		</div>
		
	</body>
</html>

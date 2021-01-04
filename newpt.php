<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>My Clinic</title>
		<link rel="stylesheet" href="css/normalize.css" />
		<link rel="stylesheet" href="css/main-style.css" />
		<link rel="stylesheet" href="css/all.css" />
	</head>
	<body>
		<!--start header-->
		<header>
			<nav>
				<div class="container">
					<ul>
					<li><a href="index.php"><i class="fas fa-clinic-medical"></i> Home</a></li>
					<li><a href="newpt.php"><i class="fas fa-user-plus"></i> New pt</a></li>
					<li><a href="pts.php"><i class="fas fa-users"></i> Patients</a></li>
					<li><a href="reqtest.php"><i class="fas fa-notes-medical"></i> Request Tests</a></li>
					<li><a href="presmeds.php"><i class="fas fa-prescription-bottle"></i> Prescripe Medications</a></li>
					</ul>
				
					<div class="logo">
						<i class="fas fa-user-md"></i> My <span>Clinic</span>
					</div>
				</div>
			</nav>
			
		</header>
		<!--end header-->
		
		<!--start article-->
		<div class="container">
			<article>
				<header>
					<h2><i class="fas fa-user-plus"></i> Add new Patient</h2>
					<p>date</p>
				</header>
				<div class="container">
					<form action="" method="POST" >
						<div class="left">
							<h3>Name :</h3>
							<input type="text" />

							<h3>Age :</h3>
							<input type="text" />

							<h3>Gender :</h3>
							<select>
								<option>Male</option>
								<option>Female</option>
							</select>

							<h3>Resdance :</h3>
							<input type="text" />

							<h3>Original home :</h3>
							<input type="text" />

							<h3>Ocupation :</h3>
							<input type="text" />

							<h3>Marital Status :</h3>
							<select>
								<option>Marride</option>
								<option>Divorced</option>
								<option>Single</option>
							</select>
						</div>
						<div class="right">
							<h3>History of presenting complain :</h3>
							<textarea></textarea>
							<input type="submit" value="Regestration"/>
						</div>
						<div class="clear"></div>
					</form>
				</div>
			</article>
		</div>
		<!--end article-->
		
		<!--start footer-->
		<footer>
			<div class="container">Copyrights Are Reseved For Aliku &copy; 2020</div></footer>
		<!--end footer-->
		
		<script src="js/jquery-3.5.1.js" ></script>
		<script src="js/main-js.js" ></script>
	</body>
</html>
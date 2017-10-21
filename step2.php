<?php

echo "

<!DOCTYPE html>
<html>

	<head>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
		<link rel='stylesheet' href='sheet.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
		<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js'></script>
		<style>
		</style>
		<title>Feynman</title>
		
		<script>
		function next() {
					document.getElementById('step2_a').style.display = 'none';
                }
            }
		</script>
	</head>
	
	<body>
		<nav class='navbar navbar-default'>
			<div class='container-fluid'>
				<div class='navbar-header'>
					<a class='navbar-brand' href='index.php'>Feynman Technique</a>
				</div>
			<ul class='nav navbar-nav'>
				<li class='active'><a href='index.php'>Home</a></li>
			</ul>
			<ul class='nav navbar-nav navbar-right'>
				<li><a href='signup.php'>Sign Up</a></li>
				<li><a href='login.php'>Login</a></li>
			</ul>
			</div>
		</nav>
		<span class='border-right-0'>
		<div class='row'>
			<div class='col-sm-1'></div>
			<div class='col-sm-10 text-center' id='step2_a' style='display:all'>
				<h3> Step 2a: Explain what you <strong>do</strong> know about ____ in simple terms </h3>
				<p> Use plain English. Pretend you are teaching it to someone else (e.g a new student). </p>
				<p>	Try to aim for less than 25 words or 256 characters </p>
				<div class='col-sm-12 input-group'>
					<div id='step2_explain'>
						<input type='text' class='form-control' placeholder='Enter Simple Explanation'><button type='submit' class='btn btn-lg' onclick='myFunction()'>Submit</button>
						<script>
						function myFunction() {
							document.getElementById('step2_a').style.display = 'none';
							document.getElementById('step2_b').style.display = 'block';
						}
						</script>
					</div>
				</div>
			</div>
			<div class='col-sm-10 text-center' id='step2_b' style='display:none'>
				<h3> Step 2b: Explain what you <strong>do not</strong> know about ____</h3>
				<p> Use plain English. Try to aim for less than 25 words or 256 characters </p>
				<div class='col-sm-12 input-group'>
					<div id='step2_explain'>
						<input type='text' class='form-control' placeholder='Enter Simple Explanation'><button onclick='window.location.href='step3.php'' type='submit' class='btn btn-lg'>Next</button>
					</div>
				</div>
			</div>
			<div class='col-sm-1'></div>
		</div>
		
	</body>
</html>";

?>
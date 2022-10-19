<?php
	//start the session
	session_start();

	if(!isset($_SESSION['user'])) header('location: login.php');

	$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Warehouse Warrior IMS Dashboard - Inventory Management System</title>
    <!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="https://kit.fontawesome.com/a7d13aa081.js" crossorigin="anonymous"></script>
</head>
<body>
	<div id="Dashboard_Main">
		<?php include('sidebar.php') ?>
		<div class="Dashboard_Content_Container" id="Dashboard_Content_Container">
			<?php include('topnav.php') ?>
			<div class="Dashboard_Content">
				<div class="Dashboard_Content_Main">
					<main>
						<h1>Dashboard</h1>
						<div class="date">
							<input type="date">
						</div>
						<div class="insights">
							<div class="sales">
								<span class="fa fa-bar-chart"></span>
								<div class="middle">
									<div class="left">
										<h3>Total Sales</h3>
										<h1>$25,025</h1>
									</div>
									<div class="progress">
										<svg>
											<circle cx='38' cy='38' r='36'></circle>	
										</svg>
										<div class="number">
											<p>81%</p>
										</div>	
									</div>
								</div>
								<small class="text-muted">Last 24 Hours</small>
							</div>
							<!--------END OF SALES------->
							<div class="expenses">
								<span class="fas fa-chart-area"></span>
								<div class="middle">
									<div class="left">
										<h3>Total Expenses</h3>
										<h1>$14,160</h1>
									</div>
									<div class="progress">
										<svg>
											<circle cx='38' cy='38' r='36'></circle>	
										</svg>
										<div class="number">
											<p>62%</p>
										</div>	
									</div>
								</div>
								<small class="text-muted">Last 24 Hours</small>
							</div>
							<!--------END OF EXPENSES------->
								<div class="income">
								<span class="fas fa-coins"></span>
								<div class="middle">
									<div class="left">
										<h3>Total Income</h3>
										<h1>$10,864</h1>
									</div>
									<div class="progress">
										<svg>
											<circle cx='38' cy='38' r='36'></circle>	
										</svg>
										<div class="number">
											<p>44%</p>
										</div>	
									</div>
								</div>
								<small class="text-muted">Last 24 Hours</small>
							</div>
							<!--------END OF INCOME------->
						</div>
					</main>
				</div>
			</div>

		</div>
	</div>

<script src="js/script.js"></script>
</body>
</html>
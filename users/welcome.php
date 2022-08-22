<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Admin Dashboard</title>
        <!-- style css php -->
        <?php include_once 'css_style/style.php';?>
		<!-- end style css php -->
	<body>
		<div id="wrapper">
            <!-- nav -->
            <?php include_once 'sidebar/nav_dashboard.php';?>
			<!-- end nav -->
			<div id="page-wrapper" class="gray-bg dashbard-1">
                <!-- navbar -->
                <?php include_once 'sidebar/navbar.php';?>
                <!-- end navbar -->
				<div class="wrapper wrapper-content">
					<div class="row">
						<div class="col-lg-12">
							<div class="ibox ">
								<div class="ibox-title">
									<h5>Settings</h5>
								</div>
								<div class="ibox-content">
								<ul class="">
		                        <li><a class="" href="profile.php">Profile</a></li>
		                        <li><a class="" href="reset_password.php">Change Password</a></li>
		                        <li><a class="" href="reset_password.php">Delete Account</a></li>
		                        <li><a class="" href="logout.php">Logout</a></li>
		                    </ul>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!-- foodter -->
                <?php include_once 'foodter/foodter.php';?>
				<!-- end foodter -->
			</div>
            <!-- chart -->
            <!-- <?php include_once 'chart/chart.php'; ?> -->
            <!-- end chart -->
		</div>
        <!-- <script> js php import</script> -->
        <?php include_once 'script/js.php';?>
		<!-- <script> import</script> -->
	</body>
</html>
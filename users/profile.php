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
    <link href="css/profile_style.css" rel="stylesheet">
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
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2>Profile</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="welcome.php">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a>Extra Pages</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <strong>Profile</strong>
                            </li>
                        </ol>
                    </div>
                </div>
                <br>
                <div id="content" class="content p-0">
                    <div class="profile-header">
                        <div class="profile-header-cover"></div>

                        

                        
                    </div>

                    <div class="profile-container">
                        <div class="row row-space-20">
                            <div class="col-md-8">
                                <div class="tab-content p-0">
                                    <div class="tab-pane active show" id="profile-about">
                           
                                        <table class="table table-profile">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">BASIC INFORMATION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="field">Name :</td>
                                                    <td class="value">
                                                        <?php echo $_SESSION["name"]; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="field">Gender</td>
                                                    <td class="value">
                                                        Male
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="field">Email :</td>
                                                    <td class="value">
                                                        <?php echo $_SESSION["email"]; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="field">Status</td>
                                                    <td class="value">
                                                        Active
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
        <?php include_once 'chart/chart.php'; ?>
        <!-- end chart -->
    </div>
    <!-- <script> js php import</script> -->
    <?php include_once 'script/js.php';?>
    <!-- <script>Library</script> -->
    <!-- <script> import</script> -->
	</body>
</html>
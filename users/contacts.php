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
    <title>Contacts</title>
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
                        <h2>Contacts</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="welcome.php">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a>Extra Pages</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <strong>Contacts</strong>
                            </li>
                        </ol>
                    </div>
                </div>
                <br>
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/profile_small.jpg">
                                            <div class="m-t-xs font-bold">Web Developer</div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3><strong>Soeng Souy</strong></h3>
                                        <p><i class="fa fa-map-marker"></i>Phnom Penh 32/106</p>
                                        <address>
                                            <strong>Twitter, Inc.</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Sok, CA 110<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/girl-glamour-4k.png">
                                            <div class="m-t-xs font-bold">CEO</div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3><strong>Alex Johnatan</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                        <address>
                                            <strong>Twitter, Inc.</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/beautiful-girl-reading-book-4k-nt.jpg">
                                            <div class="m-t-xs font-bold">Marketing manager</div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3><strong>Monica Smith</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                        <address>
                                            <strong>Twitter, Inc.</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/anastasia-scheglova-in-2020-45.jpg">
                                            <div class="m-t-xs font-bold">Sales manager</div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3><strong>Michael Zimber</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                        <address>
                                            <strong>Twitter, Inc.</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/profile_small.jpg">
                                            <div class="m-t-xs font-bold">Graphics designer</div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3><strong>Sandra Smith</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                        <address>
                                            <strong>Twitter, Inc.</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/anastasia-scheglova-in-2020-45.jpg">
                                            <div class="m-t-xs font-bold">Graphics designer</div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3><strong>Janet Carton</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                        <address>
                                            <strong>Twitter, Inc.</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/profile_small.jpg">
                                            <div class="m-t-xs font-bold">CEO</div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3><strong>Alex Johnatan</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                        <address>
                                            <strong>Twitter, Inc.</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/anastasia-scheglova-in-2020-45.jpg">
                                            <div class="m-t-xs font-bold">Graphics designer</div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3><strong>John Smith</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                        <address>
                                            <strong>Twitter, Inc.</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/profile_small.jpg">
                                            <div class="m-t-xs font-bold">Marketing manager</div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3><strong>Monica Smith</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                        <address>
                                            <strong>Twitter, Inc.</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/profile_small.jpg">
                                            <div class="m-t-xs font-bold">Sales manager</div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3><strong>Michael Zimber</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                        <address>
                                            <strong>Twitter, Inc.</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/profile_small.jpg">
                                            <div class="m-t-xs font-bold">Graphics designer</div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3><strong>Sandra Smith</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                        <address>
                                            <strong>Twitter, Inc.</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/profile_small.jpg">
                                            <div class="m-t-xs font-bold">Graphics designer</div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3><strong>Janet Carton</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                        <address>
                                            <strong>Twitter, Inc.</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                <div class="col-4">
                                    <div class="text-center">
                                        <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/profile_small.jpg">
                                        <div class="m-t-xs font-bold">CEO</div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h3><strong>Alex Johnatan</strong></h3>
                                    <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                    <address>
                                        <strong>Twitter, Inc.</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                <div class="col-4">
                                    <div class="text-center">
                                        <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/profile_small.jpg">
                                        <div class="m-t-xs font-bold">Graphics designer</div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h3><strong>John Smith</strong></h3>
                                    <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                    <address>
                                        <strong>Twitter, Inc.</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                                </a>
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
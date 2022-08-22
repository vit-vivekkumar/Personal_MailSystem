
<?php
// Initialize the session
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login2.php");
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
                            <h2>Mailbox</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="welcome.php">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a>Extra Pages</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <strong>mailbox</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <br>
                    
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ibox ">
                                    <div class="ibox-content mailbox-content">
                                        <div class="file-manager">
                                            <a class="btn btn-block btn-primary compose-mail" href="mail_compose.php">Compose Mail</a>
                                            <div class="space-25"></div>
                                            <h5>Folders</h5>
                                            <ul class="folder-list m-b-md" style="padding: 0">
                                                <li><a href="mailbox.html"> <i class="fa fa-inbox "></i> Inbox <span class="label label-warning float-right">16</span> </a></li>
                                                <li><a href="mailbox.html"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                                                <li><a href="mailbox.html"> <i class="fa fa-certificate"></i> Important</a></li>
                                                <li><a href="mailbox.html"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-danger float-right">2</span></a></li>
                                                <li><a href="mailbox.html"> <i class="fa fa-trash-o"></i> Trash</a></li>
                                            </ul>
                                            <h5>Categories</h5>
                                            <ul class="category-list" style="padding: 0">
                                                <li><a href="#"> <i class="fa fa-circle text-navy"></i> Work </a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-danger"></i> Documents</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-primary"></i> Social</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-info"></i> Advertising</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-warning"></i> Clients</a></li>
                                            </ul>
                                            <!-- label here -->
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 animated fadeInRight">
                            <div class="mail-box-header">
                                <div class="float-right tooltip-demo">
                                    <a href="mail_compose.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Reply"><i class="fa fa-reply"></i> Reply</a>
                                    <a href="#" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Print email"><i class="fa fa-print"></i> </a>
                                    <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </a>
                                </div>
                                <h2>
                                    View Message
                                </h2>
                                <div class="mail-tools tooltip-demo m-t-md">


                                    <h3>
                                        <span class="font-normal">Subject: </span>this is testing msg.
                                    </h3>
                                    <h5>
                                        <span class="float-right font-normal">10:15AM 02 FEB 2014</span>
                                        <span class="font-normal">From: </span>xyz@personalmail.com
                                    </h5>
                                </div>
                            </div>
                                <div class="mail-box">
                                    <div class="mail-body">
                                        <p>
                                            Hello!
                                           
                                        
                                        <p>
                                            Mailing system  <strong>vit university</strong>welcome.
                                        </p>
                                    </div>
                                    <div class="mail-attachment">
                                        <p>
                                            <span><i class="fa fa-paperclip"></i> 2 attachments - </span>
                                            <a href="#">Download all</a>
                                            |
                                            <a href="#">View all images</a>
                                        </p>
                                        <div class="attachment">
                                            <div class="file-box">
                                                <div class="file">
                                                    <a href="#">
                                                        <span class="corner"></span>

                                                        <div class="icon">
                                                            <i class="fa fa-file"></i>
                                                        </div>
                                                        <div class="file-name">
                                                            docz.doc
                                                            <br/>
                                                            <small>Added: May 11, 20222</small>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="mail-body text-right tooltip-demo">
                                        <a class="btn btn-sm btn-white" href="mail_compose.html"><i class="fa fa-reply"></i> Reply</a>
                                        <a class="btn btn-sm btn-white" href="mail_compose.html"><i class="fa fa-arrow-right"></i> Forward</a>
                                        <button title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Print" class="btn btn-sm btn-white"><i class="fa fa-print"></i> Print</button>
                                        <button title="" data-placement="top" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm btn-white"><i class="fa fa-trash-o"></i> Remove</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
                <!-- foodter -->
                <?php include_once 'foodter/foodter.php';?>
				<!-- end foodter -->
			</div>   
		</div>
        <!-- <script> js php import</script> -->
        <?php include_once 'script/js.php';?>
        <
	</body>
</html>
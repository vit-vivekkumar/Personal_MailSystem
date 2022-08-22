
<?php
// Initialize the session
session_start();
require_once "config.php";
require_once "php_mail_compose.php";
require_once "php_inbox.php";
require_once "php_mailbox.php";

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login2.php");
    require_once "php_mailbox.php";
    exit;
    
}
    $email=$_SESSION["email"];
    $sql = "SELECT id, name, subject,content,date FROM mail where to_mail = '{$email}'";
    
    $result = $conection_db->query($sql);


    // if(isset($_POST['delete']))
    // {
    //     $all_id = $_POST['mail_delete_id'];
        
    //     $extact_id = implode(',',$all_id);
    //     echo $extact_id;
    
    //     $query = "DELETE FROM mail WHERE id IN($extact_id)";
    //     $query_run =mysqli_query($conection_db,$query);
    
    //     if($query_run){
    //         $_SERVER['status'] = "Data deleted succesfull deleted!";
    //         header("Location: mailbx.php");
    //     }
    //     else{
    //         $_SERVER['status'] = "Data not deleted!";
    //         header("Location: mailbx.php");
    //     }
    // }
?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Pmail | Personal Mail</title>
        <!-- style css php -->
        <?php include_once 'css_style/style.php';?>
        <link href="css/profile_style.css" rel="stylesheet">
		<!-- end style css php -->
	<body>
		<div id="wrapper">
            <!-- nav -->
            <?php include_once 'sidebar/nav_dashboard.php';?>
			<!-- end nav -->
			<div id="page-wrapper" class="white-bg dashbard-1">
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
                                                <li><a href="mailbox.php"> <i class="fa fa-inbox "></i> Inbox <span class="label label-warning float-right">16</span> </a></li>
                                                <li><a href="mailbox.php"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                                                <li><a href="mailbox.php"> <i class="fa fa-certificate"></i> Important</a></li>
                                                <li><a href="mailbox.php"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-danger float-right">2</span></a></li>
                                                <li><a href="mailbox.php"> <i class="fa fa-trash-o"></i> Trash</a></li>
                                            </ul>
                                            <h5>Categories</h5>
                                            <ul class="category-list" style="padding: 0">
                                                <li><a href="#"> <i class="fa fa-circle text-navy"></i> Work </a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-danger"></i> Documents</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-primary"></i> Social</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-info"></i> Advertising</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-warning"></i> Clients</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 animated fadeInRight">
                                <div class="mail-box-header">
                                    <form method="get" action="index.html" class="float-right mail-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" name="search" placeholder="Search email">
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-sm btn-primary">
                                                    Search
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <h2> Inbox (16)</h2>
                                    
                                    <form action="php_mailbox.php" method='POST'>
                                    <div class="mail-tools tooltip-demo m-t-md">
                                        <div class="btn-group float-right">
                                            <button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i></button>
                                            <button class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i></button>
                                        </div>
                                        <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="Refresh inbox"><i class="fa fa-refresh"></i> Refresh</button>
                                        <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as read"><i class="fa fa-eye"></i> </button>
                                        <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as important"><i class="fa fa-exclamation"></i> </button>

                                        <button class="btn btn-white btn-sm" type="submit" name="delete" ><i class="fa fa-trash-o"></i> </button>

                                    </div>
                                    <?php
                                    if (isset($_SESSION['status']))
                                    {
                                        echo "<h5>".$_SESSION['status']."</h5>";
                                        unset($_SESSION['status']);
                                    }
                                 ?>
                                </div>
                             
                                <div class="mail-box">
                                    <table class="table table-hover table-mail">
                                        <tbody>
                                                <?php
                                                    while ($row = $result->fetch_assoc()) {

                                                        echo "<tr class='unread'>";
                                                        echo "<td class='check-mail'>";
                                                        echo "<input type='checkbox' name='mail_delete_id[]' value=".$row['id']." class='i-checks'>";
                                                        echo "</td>";
                                                        echo "<td class='mail-contact'><a href='mail_detail.php'>".$row['name']."</a></td>";
                                                        echo "<td class='mail-subject'><a href='mail_detail.php'><strong>".$row['subject']."</strong>".$row['content']."</a></td>";
                                                        echo "<td class=''><i class='fa fa-paperclip'></i></td>";
                                                        echo "<td class='text-right mail-date'>".$row['date']."</td>";
                                                        echo "</tr>";
                                                    }
                                                ?>
                                </form >
                                            <tr class="read">
                                                <td class="check-mail">
                                                    <input type="checkbox" class="i-checks">
                                                </t d>
                                                <td class="mail-ontact"><a href="mail_detail.php">S. Gupta</a> <span class="label label-danger float-right">Documents</span></td>
                                                <td class="mail-subject"><a href="mail_detail.php">Lorem ipsum dolor noretek imit set.</a></td>
                                                <td class=""><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right mail-date">December 22</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
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
            <!-- end chart -->
		</div>
        <?php include_once 'script/js.php';?>
	</body>
</html>


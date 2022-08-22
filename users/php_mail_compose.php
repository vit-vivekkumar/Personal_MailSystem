
<?php
	$target_dir = "uploads/";

	// $to_mail=$subject=$content="";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$to_mail= trim($_POST['to']);
		$subject = trim($_POST['sub']);
		$content = trim($_POST['msg']);
		$from_email = $_SESSION["email"];
		$file=$_FILES['file']['name'];
		$name = $_SESSION['name'];

		$sql = "INSERT INTO mail (name,to_mail, subject,content,from_mail,attachement) VALUES (?, ?, ?, ?, ?,?)";
	if($stmt = mysqli_prepare($conection_db, $sql)){
		mysqli_stmt_bind_param($stmt, "ssssss",$name, $to_mail, $subject, $content, $from_email,$file);
		move_uploaded_file($_FILES["file"]["tmp_name"], "attachment/" . $_FILES["file"]["name"]);

		if(mysqli_stmt_execute($stmt))
		{
			// Redirect to login page
			header("location: mailbox.php");
		} 
			else
		{
			echo "Something went wrong. Please try again later.";
		}
		// Close statement
		mysqli_stmt_close($stmt);
	}
	mysqli_close($conection_db);
	}
?>



<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name     = $position     = $office     = $age     = $start_date     = $salary     = "";
$name_err = $position_err = $office_err = $age_err = $start_date_err = $salary_err = "";

// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"]))
{
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name))
    {
        $name_err = "Please enter a name.";
    }
    elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/"))))
    {
        $name_err = "Please enter a valid name.";
    }
    else
    {
        $name = $input_name;
    }

    // Validate position
    $input_position = trim($_POST["position"]);
    if(empty($input_position))
    {
        $position_err = "Please enter a position.";
    }
    elseif(!($input_position))
    {
        $position_err = "Please enter a valid position.";
    }
    else
    {
        $position = $input_position;
    }

    // Validate office
    $input_office = trim($_POST["office"]);
    if(empty($input_office))
    {
        $office_err = "Please enter a office.";
    }
    elseif(!($input_office))
    {
        $office_err = "Please enter a valid office.";
    }
    else
    {
        $office = $input_office;
    }

    // Validate age
    $input_age = trim($_POST["age"]);
    if(empty($input_age))
    {
        $age_err = "Please enter the age.";     
    } 
    elseif(!($input_age))
    {
        $age_err = "Please enter a positive integer value.";
    }
    else
    {
        $age = $input_age;
    }

    // Validate date
    $input_start_date = trim($_POST["start_date"]);
    if(empty($input_start_date))
    {
        $start_date_err = "Please enter the start date.";     
    } 
    elseif(!($input_start_date))
    {
        $start_date_err = "Please enter a positive integer value.";
    }
    else
    {
        $start_date = $input_start_date;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary))
    {
        $salary_err = "Please enter the salary amount.";     
    } 
    elseif(!ctype_digit($input_salary))
    {
        $salary_err = "Please enter a positive integer value.";
    }
    else
    {
        $salary = $input_salary;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($position_err) && empty($office_err) && empty($age_err) && empty($start_date_err) && empty($salary_err))
    {
        // Prepare an update statement
        $sql = "UPDATE employees SET name=?, position=?, age=?, office=?, start_date=?, salary=? WHERE id=?";

        if($stmt = mysqli_prepare($conection_db, $sql))
        {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssi", $name, $position, $age, $office, $start_date, $salary, $param_id);
            
            // Set parameters
            $name       = $name;
            $position   = $position;
            $office     = $office;
            $age        = $age;
            $start_date = $start_date;
            $salary     = $salary;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
            {
                // Records updated successfully. Redirect to landing page
                header("location: form.php");
                exit();
            }
            else
            {
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close conection_db
    mysqli_close($conection_db);
}
else
{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"])))
    {
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM employees WHERE id = ?";
        if($stmt = mysqli_prepare($conection_db, $sql))
        {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
            {
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1)
                {
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name       = $row["name"];
                    $position   = $row["position"];
                    $office     = $row["office"];
                    $age        = $row["age"];
                    $start_date = $row["start_date"];
                    $salary     = $row["salary"];

                }
                else
                {
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
            }
            else
            {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close conection_db
        mysqli_close($conection_db);
    }
    else
    {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
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
<!-- add style css -->
<!-- end style css php -->
	<body>
    <style>
        .help-block{
            color:red;
        }
    </style>
		<div id="wrapper">
            <!-- nav -->
            <?php include_once 'sidebar/nav_form.php';?>
			<!-- end nav -->
			<div id="page-wrapper" class="gray-bg dashbard-1">
                <!-- navbar -->
                <?php include_once 'sidebar/navbar.php';?>
                <!-- end navbar -->
				<div class="wrapper wrapper-content">
                    <div class="signup-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-header">
                                    <h2>Create Record</h2>
                                </div>
                                <p>Please fill this form and submit to add employee record to the database.</p>
                                <form action="<?= htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                                    <div class="form-group <?= (!empty($name_err)) ? 'has-error' : ''; ?>">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="<?= $name; ?>">
                                        <span class="help-block"><?= $name_err;?></span>
                                    </div>
                                    <div class="form-group <?= (!empty($position_err)) ? 'has-error' : ''; ?>">
                                        <label>Position</label>
                                        <input type="text" name="position" class="form-control" value="<?= $position; ?>">
                                        <span class="help-block"><?= $position_err;?></span>
                                    </div>
                                    <div class="form-group <?= (!empty($office_err)) ? 'has-error' : ''; ?>">
                                        <label>Office</label>
                                        <input type="text" name="office" class="form-control" value="<?= $office; ?>">
                                        <span class="help-block"><?= $office_err;?></span>
                                    </div>
                                    <div class="form-group <?= (!empty($age_err)) ? 'has-error' : ''; ?>">
                                        <label>Age</label>
                                        <input type="text" name="age" class="form-control" value="<?= $age; ?>">
                                        <span class="help-block"><?= $age_err;?></span>
                                    </div>
                                    <div class="form-group<?= (!empty($start_date_err)) ? 'has-error' : ''; ?>">
                                        <label>Start Date</label>
                                        <input type="text" name="start_date" class="form-control" value="<?= $start_date; ?>">
                                        <span class="help-block"><?= $start_date_err;?></span>
                                    </div>
                                    <div class="form-group <?= (!empty($salary_err)) ? 'has-error' : ''; ?>">
                                        <label>Salary</label>
                                        <input type="text" name="salary" class="form-control" value="<?= $salary; ?>">
                                        <span class="help-block"><?= $salary_err;?></span>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $id; ?>"/>
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                    <a href="form.php" class="btn btn-default" style="color:red;">Cancel</a>
                                </form>
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
	</body>
</html>


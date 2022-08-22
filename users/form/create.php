<?php

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name     = $position     = $office     = $age     = $start_date     = $salary     = "";
$name_err = $position_err = $office_err = $age_err = $start_date_err = $salary_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
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
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, position, office, age, start_date, salary) VALUES (?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($conection_db, $sql))
        {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $name, $position, $age, $office, $start_date, $salary);
            
            // Set parameters
            $name       = $name;
            $position   = $position;
            $office     = $office;
            $age        = $age;
            $start_date = $start_date;
            $salary     = $salary;
            $param_id   = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
   <!-- add style css -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <div class="signup-form">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
                            <span class="help-block"><?= $salary_err;?></span>
                        </div>
                        <div class="form-group <?= (!empty($age_err)) ? 'has-error' : ''; ?>">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control" value="<?= $age; ?>">
                            <span class="help-block"><?= $age_err;?></span>
                        </div>
                        <div class="form-group<?= (!empty($start_date_err)) ? 'has-error' : ''; ?>">
                            <label>Start Date</label>
                            <input type="date" name="start_date" class="form-control" value="<?= $start_date; ?>">
                            <span class="help-block"><?= $start_date_err;?></span>
                        </div>
                        <div class="form-group <?= (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control" value="<?= $salary; ?>">
                            <span class="help-block"><?= $salary_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default" style="color:red;">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>


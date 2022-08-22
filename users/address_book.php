<?php
// Initialize the session
session_start();
// Include config file
require_once "config.php";

if(isset($_POST['submit'])){
  $firstname = mysqli_real_escape_string($conection_db,$_POST['firstname']);
  $lastname = mysqli_real_escape_string($conection_db,$_POST['lastname']);
  $number = mysqli_real_escape_string($conection_db,$_POST['contact']);

$query = "INSERT INTO addressbook(firstname,lastname,contact) VALUES('$firstname','$lastname','$number')";

if(mysqli_query($conection_db,$query)){
  header('Location:address_book.php');

}
else {
  echo "Error".mysqli_error($conection_db);
}
}


$query = 'select *from addressbook';
//get result
$result = mysqli_query($conection_db,$query);
//get allpost in array
$contacts = mysqli_fetch_all($result,MYSQLI_ASSOC);

//delete the contact details here
if(isset($_POST['delete'])){
  $id = $_POST['id'];
  $query = "delete from addressbook where id=$id";
  if(mysqli_query($conection_db,$query)){
    echo "<script>window.alert('Deleted!');</script>";
    header('Location:address_book.php');
  }
  else {
    echo "<script>window.alert('Failed To Delete!');</script>";
  }
}
 ?>
<html>

<head>
    <?php include_once 'css_style/style.php';?>
    <title>My Address book</title>
</head>

<body style="background-color: white">
    <div class="wrapper center">
        <div class="signup-form">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="page-header">
                        <h2>Create Contact</h2>
                    </div>
                    <form method="post">
                        <div class="form-group">
                            <!-- <label for="new-first-name">Enter First name</label> -->
                            <input type="text" name="firstname" placeholder="First Name" class="form-control" id="new-first-name" required>
                        </div>
                        <div class="form-group">
                            <!-- <label for="new-last-name">Enter Last name</label> -->
                            <input type="text" name="lastname" placeholder="Last Name" class="form-control"  id="new-last-name">
                        </div>
                        <div class="form-group">
                            <!-- <label for="new-address">Enter Contact</label> -->
                            <input type="text" name="contact"  placeholder="Phone/Email"class="form-control" id="new-address" required>
                        </div>
                        <div class="text-center">
      <input type="submit" name="submit" value=" Add Contact" class="btn btn-primary">
    </div>
                    </form>

                </div>
            </div>


            <div class="container col-lg-5 " id="data-col">
                <h2>My Contacts:</h2>
                <ul class="list-group">
                </ul>
                <table class="table table-hovered">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                    <?php
                foreach ($contacts as $contact) {
                  ?>
                    <tr>
                        <td><?php echo $contact['firstname']; ?></td>
                        <td><?php echo $contact['lastname']; ?></td>
                        <td><?php echo $contact['contact']; ?></td>
                        <td>
                            <form method="post"><input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
                                <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    <?php
                }
               ?>
                </table>
            </div>
</body>

</html>
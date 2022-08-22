<?php
require_once "config.php";
if(isset($_POST['delete']))
    {
        $all_id = $_POST['mail_delete_id'];
        
        $extact_id = implode(',',$all_id);
        echo $extact_id;
        $query = "DELETE FROM mail WHERE id IN($extact_id)";
        $query_run =mysqli_query($conection_db,$query);

        if($query_run){
            $_SERVER['status'] = "Data deleted succesfull deleted!";
            header("Location: mailbox.php");
        }
        else{
            $_SERVER['status'] = "Data not deleted!";
            header("Location: mailbox.php");

        }
        
    }
    ?>
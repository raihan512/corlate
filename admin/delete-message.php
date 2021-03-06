<?php
require_once('functions/function.php');

$id = $_GET['d'];

$del = "DELETE FROM corlate_contact WHERE contact_id = '$id'";
if(mysqli_query($con,$del)){
    header('Location: all-message.php');
}

?>
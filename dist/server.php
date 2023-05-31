<?php 
// start a session for the this file 
session_start(); 
 // connect to the database 
$db = mysqli_connect('localhost', 'root', '', 'invent_sys');

//create a registration user back-end 

if(isset($_POST['submit'])){
//recieve all iputs from the form

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);

// validate the form 
if(empty($username)){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> Username Should Be Filled.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>';
}
if(empty($email)){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> Email Cannot Be Empty.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>';
}
if(empty($password)){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> Missing Password Field.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>';
}
if(empty($cpassword)){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> Missing Confirm Password Field.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>';
}
}


?>
<?php 

if (isset($_POST['submit'])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || (empty($password))){

        header("location: home.php?signup=empty");

    } else  echo "Welcome $username";

} 

if (isset($_POST['submit-signup'])){

    $usernam = $_POST['usname'];
    $fullname = $_POST['fullname'];
    $password = $_POST['pwd'];
    $confirmpass = $_POST['confirmpwd'];
    $email = $_POST['emailone'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    
if (empty($usernam) || empty($fullname) || empty($confirmpass) || empty($email) || empty($phone) || empty($date) ){
    header("location: home.php?empty=error");
}

else if ($password !== $confirmpass){
    header("location: home.php?password=error");
}

    else echo "success";
}


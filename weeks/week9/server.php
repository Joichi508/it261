<?php 

session_start();
include('config.php');

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

if(isset($_POST['reg_user'])) {
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $user_name = mysqli_real_escape_string($iConn, $_POST['user_name']);
    $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);


    if(empty($first_name)) {
        array_push($errors, 'First Name is required!');
    }
    if(empty($last_name)) {
        array_push($errors, 'Last Name is required!');
    }
    if(empty($email)) {
        array_push($errors, 'Email is required!');
    }
    if(empty($user_name)) {
        array_push($errors, 'User_name is required!');
    }
    if(empty($password_1)) {
        array_push($errors, 'Password is required!');
    }
    if($password_1 !== $password_2) {
        array_push($errors, 'Passwords do not match!');
    }


    $user_check_query = "SELECT * FROM users WHERE user_name = '$user_name' OR email = '$email' LIMIT 1 ";

    $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    $rows = mysqli_fetch_assoc($result);

    if($rows) {

        if($rows['user_name'] == $user_name) {
            array_push($errors, 'User_name already exists!');
        }

        if($rows['email'] == $email) {
            array_push($errors, 'Email already exists!');
        }

    }  

    if(count($errors) == 0) {
        
        $password = md5($password_1);

        $query = "INSERT INTO users (first_name, last_name, email, user_name, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

        mysqli_query($iConn, $query);

        $_SESSION['user_name'] = $user_name;
        $_SESSION['success'] = $success;

        header('Location:login.php');

    } 
} 

if(isset($_POST['login_user'])) {
    $user_name = mysqli_real_escape_string($iConn, $_POST['user_name']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    if(empty($user_name)) {
        array_push($errors, 'User_name is required!');
    }
    if(empty($password)) {
        array_push($errors, 'Password is required!');
    }


    if(count($errors) == 0 ) {
        $password = md5($password);

        
        $query = "SELECT * FROM users WHERE user_name = '$user_name' AND password = '$password'";
        $results = mysqli_query($iConn, $query);

        
        if(mysqli_num_rows($results) == 1) {
            $_SESSION['user_name'] = $user_name;
            $_SESSION['success'] = $success;
            
            header('Location:index.php');

        } else {
            array_push($errors, 'Wrong user_name password cb');
        } 

    } 

} 
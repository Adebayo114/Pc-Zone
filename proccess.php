<?php 
require 'config/function.php';
if(isset($_SESSION['loggedIn'])){
    ?>
        <script>window.location.href = 'index.php';</script>
    <?php
}

if(isset($_POST['signup_btn'])){
    $first_name = validate($_POST['first_name']);
    $last_name = validate($_POST['last_name']);
    $email = validate($_POST['email']);
    $password = validate($_POST['psw']);

    if($first_name != '' && $last_name != '' && $email != '' && $password != ''){
        if(!ctype_alpha($first_name)){
            redirect('signup.php', "$first_name is not a valid name", 'alert-warning');
        }elseif(!ctype_alpha($last_name)){
            redirect('signup.php', "$last_name is not a valid name", 'alert-warning');
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            redirect('signup.php', "$email is not a valid email", 'alert-warning');
        }

        // $uniqueCode = rand(1000, 9999);
        // $timestamp = date('Y-m-d H:i:s');

        $query = mysqli_query($conn, "SELECT email FROM users WHERE email='$email' LIMIT 1");
        if($query && mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            $user_email = $row['email'];
            redirect("signup.php", "$user_email is registered with another account, <a href='login.php' style='color: rgb(165, 45, 93);'>Login here</a>", "alert-warning");
        }else{
            $data = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ];

            $result = insert('users', $data);
            if($result){
                redirect('login.php', 'You successfully created an account, login to access your dashboard', 'alert-success');
            }else{
                redirect('signup.php', 'An error occured while creating your account', 'alert-danger');
            }
        }

    }else{
        redirect('signup.php', 'All fields required', 'alert-danger');
    }
}

if(isset($_POST['login_btn'])){
    $email = validate($_POST['email']);
    $pwd = validate($_POST['psw']);

    if($email != '' && $pwd != ''){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' LIMIT 1");
        if($sql && mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_id = $row['id'];
            $firstName = $row['first_name'];
            $lastName = $row['last_name'];
            $email = $row['email'];
            $hasedPassword = $row['password'];

            if(!password_verify($pwd,$hasedPassword)){
                redirect('login.php', 'Invalid Login details', 'alert-danger');
            }

            $_SESSION['loggedIn'] = true;
            $_SESSION['loggedInUser'] = [
                'user_id' => $row['id'],
                'firstname' => $row['first_name'],
                'lastname' => $row['last_name'],
                'email' => $row['email'],
            ];
            header('Location: index.php');

        }else{
            redirect('login.php', 'Invalid login details', 'alert-danger');
        }
    }else{
        redirect('login.php', 'All fields are required', 'alert-danger');
    }
}
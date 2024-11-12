<?php 
if(isset($_SESSION['loggedInAdmin']))
{
    $email = validate($_SESSION['loggedInUser']['email']);

    $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 0)
    {
        logoutSession();
        redirect('../login.php', 'Access Denied!','alert-danger');
    }
    else
    {
        $row = mysqli_fetch_assoc($result);
        if($row['is_ban'] == 1){
            logoutSession();
            redirect('../login.php', 'Your account has been banned! Please contact admin.', 'alert-danger');
        }

        if($row['user_type'] == 'buyer'){
            logoutSession();
            redirect('../login.php', 'Access Denied!.','alert-danger');
        }
    }
}
else
{
    redirect('../login.php', 'Login to access Your Dashboard', 'alert-warning');
}
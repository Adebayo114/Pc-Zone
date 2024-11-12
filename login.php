<?php
include("includes/header.php");

if(isset($_SESSION['loggedIn']) && isset($_SESSION['loggedInAdmin'])){
    ?>
        <script>window.location.href = 'index.php';</script>
    <?php
}
?>

<div class="signin_container">
    <div class="start2">
        <div class="text1k">
            Pc Zone ✔
        </div>
        <div style="padding-inline: 1rem;"><?php alertMessage() ?></div>
        <div class="ques-l">
            if you don't have an account
            <div class="ques-2">
                Please <a href="signup.php"><span class="ques-3">Sign Up Here</span></a>
            </div>
        </div>

        <div class="login-form">
            <form action="proccess.php" method="post">
                <div class="name">
                    <div class="input1">email</div>
                        <input type="email" name="email" id="email" placeholder="Enter your registered email">
                    </div>
        
        
                    <div class="psw">
                        <div class="input1">Password</div>
                        <input type="password" name="psw" id="psw" placeholder="**************">
                    </div>
                </div>

                <div class="f-psw">
                    <a href="#" class="text-primary">Forgot password?</a>
                </div>
    
                <div class="sign-up-btn">
                    <a href="login.php"><button class="login_btn" name="login_btn" type="submit">LOGIN</button></a>
                </div>
            </form>
        </div>
    </div>
</div>
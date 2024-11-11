<?php 
include("includes/header.php");

if(isset($_SESSION['loggedIn'])){
    ?>
        <script>window.location.href = 'index.php';</script>
    <?php
}
?>

<div class="signin_container">
    <div class="back">
        <a href="index.html"><img src="./Images/icons/back.png" alt=""></a>
    </div>
    <div class="start">
        <div class="signup-page">
            <div style="padding-inline: 1rem;"><?php alertMessage() ?></div>
            <div class="head-tag">Let Sign You Up ✔</div>
            <div class="form-page">
                <form action="proccess.php" method="post">
                    <div class="input1">
                        <div class="text1">First Name</div>
                        <input type="text" name="first_name" id="name" placeholder="First Name here">
                    </div>

                    <div class="input1">
                        <div class="text1">Last Name</div>
                        <input type="text" name="last_name" id="name" placeholder="Last Name here">
                    </div>

                    <div class="input2">
                        <div class="text2">Email</div>
                        <input type="email" name="email" id="email" placeholder="pranav@gmail.com">
                    </div>

                    <div class="input3">
                        <div class="text3">Password</div>
                        <input type="password" name="psw" id="psw" placeholder="**************">
                        <input type="hidden" name="otp">
                        <input type="hidden" name="usertype" value="user">
                    </div>

                    <div class="sign-up-btn">
                        <button class="signin_btn" name="signup_btn" >SIGN UP</button>
                    </div>
                </form>

                    <div class="sign-in-link">
                        Already a Customer?
                        <a href="login.php"><span class="login-text">Login</span></a>
                    </div>
            </div>
        </div>
    </div>
</div>
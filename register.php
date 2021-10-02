<?php include_once "header2.php"; ?>
<body>
    <div class="wrapmain">
        <section class="signup">
            <form class="card" onsubmit="return validate()" enctype="multipart/form-data">
                <p id="error"></p>
                <p id="noterror"></p>
                <h1>Registration</h1>
                <div class="formregistration">
                    <label for="username">Your name</label><br>
                    <input class="input_e" type="text" name="username" placeholder="Username" id="username" required>
                    <i class="fa fa-times n_times" aria-hidden="true"></i>
                    <i class="fa fa-check n_check" aria-hidden="true"></i>
                </div>
                <div class="formregistration">
                    <label for="email">Your Email</label><br>
                    <input class="input_e" type="text" name="email" placeholder="Email" id="email" required>
                    <i class="fa fa-times u_times" aria-hidden="true"></i>
                    <i class="fa fa-check u_check" aria-hidden="true"></i>
                </div>
                <div class="formregistration">
                    <label for="password">Your Password</label><br>
                    <input class="input_e" type="password" name="password" placeholder="Password" id="pass" required>
                    <i class="fa fa-times p_times" aria-hidden="true"></i>
                    <i class="fa fa-check p_check" aria-hidden="true"></i>
                </div>
                <div class="formregistration">
                    <label for="rpassword">Please repeat password</label><br>
                    <input class="input_e" type="password" name="rpassword" placeholder="Repeat password" id="rpass" required>
                    <i class="fa fa-times r_times" aria-hidden="true"></i>
                    <i class="fa fa-check r_check" aria-hidden="true"></i>
                </div>
                <div class="formregistration">
                    <label for="img">Select image</label><br>
                    <input class="input_e" type="file" name="image" onchange="validate_fileupload(this.value);" id="img" required>
                    <i class="fa fa-times i_times" aria-hidden="true"></i>
                    <i class="fa fa-check i_check" aria-hidden="true"></i>
                </div>
                <div class="formregistration button">
                    <input type="submit" name="login-btn" id="Login" value="Continue to chat">
                </div>
                <!-- <a href="chat_page.html"><button type="submit" name="login-btn" id="Login">Login</button></a> -->
                <span class="outer">Already have a account? <a href="index.php" class="register">Login</a></span>
            </form>
        <section>
    </div>
    <script src="js/validatereg.js"></script>
    <script src="js/signup.js"></script>
</body>
</html>
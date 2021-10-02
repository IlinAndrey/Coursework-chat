<?php include_once "header2.php"; ?>
<body>
    <div class="wrapmain">
        <section class="login">
            <form class="card" onsubmit="return validate()">
                <p id="error"></p>
                <p id="noterror"></p>
                <h1>Welcome!</h1>
                <div class="formregistration">
                    <label for="email">Email</label><br>
                    <input class="input_e" type="text" name="email" placeholder="Email" id="email">
                    <i class="fa fa-times u_times" aria-hidden="true"></i>
                    <i class="fa fa-check u_check" aria-hidden="true"></i>
                </div>
                <div class="formregistration">
                    <label for="password">Password</label><br>
                    <input class="input_e" type="password" name="password" placeholder="Password" id="pass">
                    <i class="fa fa-times p_times" aria-hidden="true"></i>
                    <i class="fa fa-check p_check" aria-hidden="true"></i>
                </div>
                <div class="formregistration button">
                    <a src="chat_page.html"><input type="submit" name="login-btn" id="Login"></a>
                </div>
                <!-- <a href="chat_page.html"><button type="submit" name="login-btn" id="Login">Login</button></a> -->
                <span>If you don't get a account <a href="register.php" class="register">Register</a></span>
            </form>
        </section>
    </div>
    <script src="js/validate.js"></script>
    <script src="js/login.js"></script>
</body>
</html>
<!-- logo + logIn, registrate and basket buttons -->

<!-- ````````````````````````````````new code``````````````````````` -->

<header id="banner" role="banner">
    <div id="cd-logo"><a href="#0"><img src="gallery/logo/logo.png" alt="Logo"></a></div>

    <nav class="main-nav">
        <ul>
            <!-- inser more links here -->
            <?php
                if(session_status() == PHP_SESSION_ACTIVE){
                    if($_SESSION['loggedin'] == true){
                        echo '<li><a href="#0">'.$_SESSION['email'] .'</a></li><li><a href="stopSession.php">Logout</a></li>';
                    }else{
                        echo '<li><a class="cd-signin" href="#0">Log in</a></li><li><a class="cd-signup" href="#0">Sign up</a></li>';
                    }
                }
            ?>
        </ul>
    </nav>
</header>

<div id="loginStyle" class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
            <ul class="cd-switcher">
                <li><a href="#0">Log in</a></li>
                <li><a href="#0">New account</a></li>
            </ul>

            <div id="cd-login"> <!-- log in form -->
                <form method="post" class="cd-form" action="php/loginFunction.php">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signin-email" name="email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">Password</label>
                        <input class="full-width has-padding has-border" id="signin-password" name="password" type="text"  placeholder="Password">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Remember me</label>
                    </p>

                    <p class="fieldset">
                        <input class="full-width" type="submit" value="Login">
                    </p>
                </form>
                
                <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
                <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div> <!-- cd-login -->

            <div id="cd-signup"> <!-- sign up form -->
                <form class="cd-form" method="POST" action="php/signinFunction.php">
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Username</label>
                        <input class="full-width has-padding has-border" id="signup-username" name="username" type="text" placeholder="Username">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signup-email" name="email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" id="signup-password" name="password" type="password"  placeholder="Password">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input type="checkbox" id="accept-terms">
                        <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Create account">
                    </p>
                </form>

                <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div> <!-- cd-signup -->

            <div id="cd-reset-password"> <!-- reset password form -->
                <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="reset-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Reset password">
                    </p>
                </form>

                <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
            </div> <!-- cd-reset-password -->
            <a href="#0" class="cd-close-form">Close</a>
        </div> <!-- cd-user-modal-container -->
    </div> <!-- cd-user-modal -->


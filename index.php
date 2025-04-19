<?php
include 'views/header.php';
include_once 'models/dbconnection.php';
?>


<div class="container">
    <div class="content">
        <h2>Reelstagram</h2>
        <p>This is the homepage of our website. Feel free to explore.</p>
    </div>

    <form id="loginform" action="models/login_user.php" method="POST">
        <label for="uname">Username or Email</label>
        <input type="text" name="uname" id="uname" placeholder="Username or Email" required>

        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" placeholder="Password" required>

        <input type="checkbox" name="signedin" id="signedin" value="signedin">
        <label for="signedin">Keep Me Signed In</label>

        <input type="submit" value="Log In">
        <a href="./registration.php" class="register-btn">Register</a>
       
    </form>
</div>

<?php
include 'views/footer.php';
?>
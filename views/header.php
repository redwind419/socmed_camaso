<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Socmed</title>
        <link href="./res/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script type="text/javascript" src="darkmode.js" defer></script>
    </head>
    <body class="<?= isset($_SESSION['uid']) ? 'logged-in' : 'logged-out' ?>">
       
        <div class="navbar">
            <h1>Reelstagram</h1>
            <ul>
                
                  
                        <!---Bali2 lang ang list myself you got this!----->   

                <?php
                if (isset($_SESSION['uid'])) {
                    
                ?>
                    
                    <li><a href="./profile.php"><i class="fa fa-user"></i>
                        <?= $_SESSION['fname'] . " " . $_SESSION['lname']; ?>
                    </a></li>
                    <li><a href="./gallery.php"><i class="fa fa-image"></i> Gallery</a></li>  
                    <li><a href="./about.php"><i class="fa fa-sliders"></i> Settings</a></li>
                    <li><a href="./timeline.php"><i class="fa fa-user"></i> Timeline</a></li>
                   
                    <li><a href="./models/logout.php"><i class="fa fa-sign-out-alt"></i> Log Out</a></li>
                <?php
                } else {
                  
                ?>
                    

                <?php
                }
                ?>
                

            </ul>
        </div>
    </body>
</html>

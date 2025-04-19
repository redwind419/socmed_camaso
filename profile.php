<?php

include 'views/header.php';

if(isset($_SESSION['uid'])){
    include 'views/view_post.php';
}

include 'views/footer.php';
?>
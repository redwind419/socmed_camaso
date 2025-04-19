<div class="create_post">
    <form action="./models/create_post.php" method="POST">
        <textarea class="create_post_content" name="create_post_content" id="create_post_content"></textarea>
        <input type="submit" value="POST">
    </form>
</div>

<div class="post-container">
    <ul>
        <?php 
        require './models/dbconnection.php';

        $con = create_connection();

        if ($con->connect_error) {
            die("Failed to connect: " . $con->connect_error);
        }

        $sgl_post = "SELECT `user`.`firstname`, `user`.`lastname`, `post`.`text_content`, `post`.`date`, `post`.`time`, `post`.`pid`, `user`.`uid`
                    FROM `post`
                    INNER JOIN `user`
                    ON `post`.`uid` = `user`.`uid`;";

        $result_post = $con->query($sgl_post);

        while ($row = $result_post->fetch_assoc()) {
            echo "<li class='post'>";
            echo "<strong>" . $row['firstname'] . ":</strong> ";
            echo $row['text_content'];
            echo "</li>";
        }
        ?>
    </ul>
</div>

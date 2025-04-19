<?php
include 'views/header.php';

include 'file_list.php';
?>


<form class="upload-form" action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type= "submit" name= "submit">Upload</button>

</form>

<?php
include 'views/footer.php';
?>
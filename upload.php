<?php

include 'views/header.php';
?> 
<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    // Formats of files nga eh upload DONT TOUCH!!!
    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'mp4', 'mp3', 'webm');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError == 0) {
            if ($fileSize < 50000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'uploads/' . $fileNameNew;

                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    header("Location: upload.php?uploadsuccess");
                    exit();
                } else {
                    echo "Error moving file!";
                }
            } else {
                echo "File size too big! (Max: 50MB)";
            }
        } else {
            echo "Error uploading file!";
        }
    } else {
        echo "Invalid file type!";
    }
}
?>


<?php
include 'views/footer.php';
?>
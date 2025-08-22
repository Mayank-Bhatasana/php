<?php
    if ($_FILES["testFile"]) {
        echo "<pre>";
        print_r($_FILES["testFile"]);
        echo "</pre>";

        $file_temp = $_FILES['testFile']['tmp_name'];

        $target_dir = "uploads/";
        $fileName = $_FILES["testFile"]["name"];
        $targetFile = $target_dir . $fileName;
        echo "Uploading file: ";
        if (move_uploaded_file($file_temp, $targetFile)) {
            echo "Success!";
        } else {
            echo "Failed to upload!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="testFile" id="testFile">
    <input type="submit" value="s">
</form>

</body>
</html>
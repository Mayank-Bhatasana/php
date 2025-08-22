<?php
    if($_FILES["testFile"]){
        echo $_FILES["testFile"]["name"];

        $fileTemp = $_FILES["testFile"]["tmp_name"];

        $targetDir = "uploads/";
        $fileName = $_FILES["testFile"]["name"];
        $targetFile = $targetDir . $fileName;

        if(move_uploaded_file($fileTemp, $targetFile)){
            $filePath = $targetFile;
        }
        else{
            echo "Failed to upload!";
        }
    }
?>

<!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="testFile" id="testFile">
    <input type="submit" value="submit">
</form>
<img src="<?php echo $filePath ?>" alt="uploaded file" style="width: 100px; height: 100px;" />
</body>
</html>

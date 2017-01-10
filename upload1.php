<!DOCTYPE html>
<html>
    <head>
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
        <link rel="stylesheet" href="style_projekt4.css" type="text/css" media="all" />	
        <title>sprawdz</title>
    </head>
    <body>
        <?php
        $target_dir = "/home/stud/sykutm/WWW/pliki/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        
// Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
// Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
       
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";

        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                chmod($target_file, 0777);
                echo "Plik zostal wyslany poprawnie. </br>"; // " . basename($_FILES["fileToUpload"]["name"]) . "
            } else {
           //     echo "Wystpąpił problem podczas uploadowania pliku";
            }
        }
        ?>
        <div>

            <form action="upload1.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <p></p>
                <input type="submit" value="Upload Image" name="submit">
            </form>

        </div>


    </body>
</html>

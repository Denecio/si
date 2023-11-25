<?php
    //get the data from the form
    $name = $_POST['name'];
    $artist = $_POST['artist'];
    $genre = $_POST['genre'];
    $year = $_POST['year'];
    $price = $_POST['price'];
    $units = $_POST['units'];
    $img = $_FILES['img'];

    // Access various properties of the file
    $fileName = $img["name"];
    $fileType = $img["type"];
    $fileSize = $img["size"];
    $tempFilePath = $img["tmp_name"];

    print $fileName ." ". $fileSize . " " . $tempFilePath ." ". $fileType . "\n";

    if ($img["error"] !== UPLOAD_ERR_OK) {
        // Handle the error
        echo "Error uploading file. Error code: " . $img["error"];
    } else {
        // Access various properties of the file
        $fileName = $img["name"];
        $fileType = $img["type"];
        $fileSize = $img["size"];
        $tempFilePath = $img["tmp_name"];

        print $fileName ." ". $fileSize . " " . $tempFilePath ." ". $fileType . "\n";
    }
?>
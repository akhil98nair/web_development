




<?php
$target_dir = "images/gallery/";
$target_file = $target_dir . basename($_FILES["b"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["b"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["b"]["size"] > 50000000000 ) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["b"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["b"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
        
    }
}

//header("location: ajax_form.php");
?>
<?php
if (isset($_REQUEST['ok'])) {
 $xml = new DOMDocument("1.0","UTF-8");
 $xml->load("hp.xml");
 

 $rootTag = $xml->getElementsByTagName("fullcart")->item(0);
 $dataTag = $xml->createElement("cart");
 
 $aTag = $xml->createElement("id",$_REQUEST['a']);
 $bTag = $xml->createElement("image",$_FILES["b"]["name"]);
// $cTag = $xml->createElement("name",$_REQUEST['c']);
// $dTag = $xml->createElement("price",$_REQUEST['d']);
 
 $dataTag->appendChild($aTag);
 $dataTag->appendChild($bTag);
// $dataTag->appendChild($cTag);
// $dataTag->appendChild($dTag);
// 
 $rootTag->appendChild($dataTag);
 
 $xml->save("hp.xml");
 header("location: ajax_form.php");
}
?>
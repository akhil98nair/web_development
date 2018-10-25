<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
if ($_FILES["fileToUpload"]["size"] > 50000000000 ) {
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

<?php
    $p_name ="";
    $received = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $p_name = clean_input($_POST["p_name"]);
//        $image = clean_input($_POST["fileToUpload"]);
         $price = clean_input($_POST["price"]);
        
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "turningpage";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $stmt = $conn->prepare("INSERT INTO products (p_name, image, price) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $p_name,$_FILES["fileToUpload"]["name"] , $price);    
        $stmt->execute();
        $stmt->close();
        
        
        
        $conn->close();
        echo "<script type='text/javascript'> window.alert('Record Inserted Successfully') </script>";
        header("location:homepage.php"); 
    }

    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>


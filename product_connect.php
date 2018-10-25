<?php
    $p_name ="";
    $received = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $p_name = clean_input($_POST["p_name"]);
        $image = clean_input($_POST["fileToUpload"]);
        
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "turningpage";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $stmt = $conn->prepare("INSERT INTO products (p_name, image) VALUES (?, ?)");
        $stmt->bind_param("ss", $p_name, $image);    
        $stmt->execute();
        $stmt->close();
        $conn->close();
        echo "<script type='text/javascript'> window.alert('Record Inserted Successfully') </script>";
        header("location:cart.php"); 
    }

    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
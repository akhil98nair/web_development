<?php
    $name = $email ="";
    $received = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = clean_input($_POST["name"]);
        $user_name = clean_input($_POST["user_name"]);
        $email = clean_input($_POST["email"]);
        $pass_word = clean_input($_POST["pass_word"]);
        $confirm_pass= clean_input($_POST["confirm_pass"]);
        $contact = clean_input($_POST["contact"]);
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "turningpage";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $stmt = $conn->prepare("INSERT INTO sign_up (name, user_name, email, pass_word,contact,confirm_pass) VALUES (?, ?, ?, ?,?,?)");
        $stmt->bind_param("ssssis", $name, $user_name, $email, $pass_word,$contact,$confirm_pass);    
        $stmt->execute();
        $stmt->close();
        $conn->close();
        echo "<script type='text/javascript'> window.alert('Record Inserted Successfully'); window.location.href='login.php'; </script>";    
        
    }

    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
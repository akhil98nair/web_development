<?php
    session_start();
    $user_name = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_name = clean_input($_POST["user_name"]);
        $pass_word = clean_input($_POST["pass_word"]);
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "turningpage";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "SELECT pass_word from sign_up  where user_name ='" .$user_name . "'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $pwd = $row['pass_word'];
        if (strcmp($pwd, $pass_word)==0){        
            $_SESSION['user']= $user_name;
            echo "<script> window.alert('logged in as $user_name');window.location.href='homepage.php'; </script>"; 
        }else{
            echo "<script> window.alert('Incorrect Login');window.location.href='login.php'; </script>";
        }
        
        $conn->close();
    }

    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
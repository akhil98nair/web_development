<?php 
session_start();
if(isset($_SESSION['user'])){

?>

  
<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
        <script src="other/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax.php", true);
  xhttp.send();
}
        </script>
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: Arial;
            }

            .header {
                text-align: center;
                padding: 32px;
            }

            .row {
                display: -ms-flexbox; /* IE10 */
                display: flex;
                -ms-flex-wrap: wrap; /* IE10 */
                flex-wrap: wrap;
                padding: 0 4px;
            }

            /* Create four equal columns that sits next to each other */
            .column {
                -ms-flex: 25%; /* IE10 */
                flex: 25%;
                max-width: 25%;
                padding: 0 4px;
            }

            .column img {
                margin-top: 8px;
                vertical-align: middle;
            }

            /* Responsive layout - makes a two column-layout instead of four columns */
            @media screen and (max-width: 800px) {
                .column {
                    -ms-flex: 50%;
                    flex: 50%;
                    max-width: 50%;
                }
            }

            /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .column {
                    -ms-flex: 100%;
                    flex: 100%;
                    max-width: 100%;
                }
            }
            .bg{
                background-color:window;
                height:150%;
                background-position:center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>

    </head>


    <body>
        
        <div class = "bg">
        <div class = "container">
        <div class = "jumbotron bg-info ">
        <center>
        <h1>THE TURNING_PAGE</h1>
        <h2>KOKILA NADAR</h2>
        </center>
        </div>
        <ul class = "nav nav-tabs justify-content-center">
        <li class = "nav-item">
        <a class = "nav-link active" href = "#">Home</a>
        </li>
        <li class = "nav-item">
            <a class = "nav-link" href = "javascript:loadDoc()">Buy</a>
        </li>
        <li class = "nav-item">
        <a class = "nav-link" href = "#">Creative</a>
        </li>
        <li class = "nav-item">
        <a class = "nav-link" href = "loginout.php">Logout</a>
        </li>
        </ul>
        </div><br><br>
        <!--photo grid-->
        <div class = "container" id="demo">
            <div class="img-responsive">
        <div class = "row">
        <div class = "column">
            <img src = "images/1 (1).jpg" style = "width:100%">
            <img src = "images/1 (10).png" style = "width:100%">
            <img src = "images/1 (11).jpg" style = "width:100%">
            <img src = "images/1 (11).png" style = "width:100%">
            <img src = "images/1 (33).png" style = "width:100%">
            <img src = "images/1 (34).png" style = "width:100%">
            <img src = "images/1 (35).png " style = "width:100%">
        </div>
        <div class = "column">
            <img src = "images/1 (36).png" style = "width:100%">
            <img src = "images/1 (37).png" style = "width:100%">
            <img src = "images/1 (38).png" style = "width:100%">
            <img src = "images/1 (39).png" style = "width:100%">
            <img src = "images/1 (40).png" style = "width:100%">
            <img src = "images/1 (2).jpg" style = "width:100%">
            <img src = "images/1 (2).png" style = "width:100%">
        </div>
        <div class = "column">
            <img src = "images/1 (20).png" style = "width:100%">
            <img src = "images/1 (21).png" style = "width:100%">
            <img src = "images/1 (22).png" style = "width:100%">
            <img src = "images/1 (47).jpg" style = "width:100%">
            <img src = "images/1 (46).jpg" style = "width:100%">
        <img src = "images/1 (24).png" style = "width:100%">
        <img src = "images/1 (25).png" style = "width:100%">
        </div>
        <div class = "column">
            <img src = "images/1 (26).png" style = "width:100%">
            <img src = "images/1 (27).png" style = "width:100%">
            <img src = "images/1 (43).png" style = "width:100%">
            <img src = "images/1 (29).png" style = "width:100%">
            <img src = "images/1 (3).jpg" style = "width:100%">
            <img src = "images/1 (30).png" style = "width:100%">
            <img src = "images/1 (31).png" style = "width:100%">
        </div>
        </div>
            </div>
        </div>
        
    </body>

</html>
<?php 
}else{

?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
        <script src="other/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax.php", true);
  xhttp.send();
}


        </script>
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: Arial;
            }

            .header {
                text-align: center;
                padding: 32px;
            }

            .row {
                display: -ms-flexbox; /* IE10 */
                display: flex;
                -ms-flex-wrap: wrap; /* IE10 */
                flex-wrap: wrap;
                padding: 0 4px;
            }

            /* Create four equal columns that sits next to each other */
            .column {
                -ms-flex: 25%; /* IE10 */
                flex: 25%;
                max-width: 25%;
                padding: 0 4px;
            }

            .column img {
                margin-top: 8px;
                vertical-align: middle;
            }

            /* Responsive layout - makes a two column-layout instead of four columns */
            @media screen and (max-width: 800px) {
                .column {
                    -ms-flex: 50%;
                    flex: 50%;
                    max-width: 50%;
                }
            }

            /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .column {
                    -ms-flex: 100%;
                    flex: 100%;
                    max-width: 100%;
                }
            }
            .bg{
                background-color:window;
                height:150%;
                background-position:center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>

    </head>


    <body>
        
        <div class = "bg">
        <div class = "container">
        <div class = "jumbotron bg-info ">
        <center>
        <h1>THE TURNING_PAGE</h1>
        <h2>KOKILA NADAR</h2>
        </center>
        </div>
        <ul class = "nav nav-tabs justify-content-center">
        <li class = "nav-item">
        <a class = "nav-link active" href = "">Home</a>
        </li>
        <li class = "nav-item">
            <a class = "nav-link" href = "javascript:loadDoc();">Buy</a>
        </li>
        <li class = "nav-item">
        <a class = "nav-link" href = "#">Creative</a>
        </li>
        <li class = "nav-item">
        <a class = "nav-link" href = "login.php">Login</a>
        </li>
        </ul>
        </div><br><br>
        <!--photo grid-->
        <div class = "container" id="demo">
            <div class="img-responsive">
        <div class = "row">
        <div class = "column">
            <img src = "images/mobile cover/mob_cover (1).JPG" style = "width:100%">
            <img src = "images/mobile cover/mob_cover (1).png" style = "width:100%">
            
        </div>
        <div class = "column">
            <img src = "images/mobile cover/mob_cover (2).JPG" style = "width:100%">
            <img src = "images/mobile cover/mob_cover (2).png" style = "width:100%">
            
        </div>
        <div class = "column">
            <img src = "images/mobile cover/mob_cover (3).png" style = "width:100%">
            <img src = "images/mobile cover/mob_cover (4).png" style = "width:100%">
            
        </div>
        
        </div>
            </div>
        </div>
        
    </body>

<?php } ?>

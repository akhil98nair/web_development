<!DOCTYPE html>
<?php
//include 'product_connect.php'
//;
?>
<html>
    <head>
        <title>Product</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
        <script src="other/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </head>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("images/w4.jpg");

            /* Full height */
            height: 100%; 

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #demo2{
            color:#040505;
            font-family: cursive;

        }
        #demo3{

            color:#16181b;
            font-family: cursive;
        }

    </style>
    <body>

        <div class="bg">

            <br><br><br><br><br><br>
            <center>
                <div class="container">


                    <br>
                    <div class="form-group">
                        <input type="hidden" name="filename" id="filename">
                        <form action="upload1.php" method="post" enctype="multipart/form-data">
                            <table class="table-hover responsive">  

                                <tbody>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <h4><b><p id="demo2">Product details</p></b></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label id="demo3"><b>Product name:</b></label>
                                        </td>
                                        <td>
                                            <input type="text" id="p_name" name="p_name" placeholder="Enter Productname">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label id="demo3"><b>Price</b></label>
                                        </td>
                                        <td>
                                            <input type="integer" id="price" name="price" placeholder="Enter Price">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label id="demo3"><b>Upload image</b></label>
                                        </td>
                                        <td>

                                            <input  type="file" name="fileToUpload" id="fileToUpload">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary" value="submit" name="submit" id="button">Submit</button>    <button type="reset" class="btn btn-primary">Cancel</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>   

        </div>
    </center>
</div>

</body>
</html>




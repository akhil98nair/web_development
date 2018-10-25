<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    </head>
    <style>
        body, html {
            height: 100%;
            margin: 2px;
        }

        #demo3{
            color:#040505;
            font-family: cursive;

        }
        #demo4{

            color:#16181b;
            font-family: cursive;
        }
        .abc{
            position: relative;
            right: 0px;
            width: 1000px;
            /*order:3px black dashed;*/
            padding: 0px;
        }

    </style>
    <body>
        <?php
//       session_start();
//       session_destroy();
//       session_start();

        if (isset($_SESSION['user'])) {
            header("location: homepage.php");
        }
        ?>
        <div class="container">
            <form action="login_connect.php" method="post">
                <div class="loginbox">
                    <br>
                    <div class="form-group">
                        <div class="abc">
                            <table class="table-hover responsive">              
                                <tbody>
                                    <tr>
                                        <td>
                                            <label id="demo4"><b>Username:</b></label>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter Username">
                                        </td>

                                        <td>
                                            <label id="demo4"><b>Password:</b></label>
                                        </td>
                                        <td>
                                            <input type="password" class="form-control" id="pass_word" name="pass_word" placeholder="Enter Password">
                                        </td>

                                        <td>
                                            <a href="forgotpassword.php">Forgot password?</a>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary" value="LOGIN" name="submit" id="button">Submit</button>    <button type="reset" class="btn btn-primary">Cancel</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </div>
            </form>
        </div>

    </div>

</body>
</html>


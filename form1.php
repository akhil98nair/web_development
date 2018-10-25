<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
        <script src="other/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title>Turning Page</title>
        <script type='text/javascript'>
            function validation()
            {
            var pass_word = document.register.pass_word;
            var user_name = document.register.user_name;
            var email = document.register.email;
            var contact = document.register.contact;
            if (user_name_validation(user_name, 5, 12))
            {
            if (pass_word_validation(pass_word, 5, 12))
            {
            if (allLetter(user_name))
            {
            if (allnumeric(contact, 1, 10))
            {
            if (ValidateEmail(email))
            {


            }
            }
            }
            }
            }


            return false;
            }
            }


            function pass_word_validation(pass_word, mx, my)
            {
            var pass_word_len = pass_word.value.length;
            if (pass_word_len === 0 || pass_word_len >= my || pass_word_len < mx)
            {
            alert("Password should not be empty / length be between " + mx + " to " + my);
            pass_word.focus();
            return false;
            }
            return true;
            }

            function allLetter(user_name)
            {
            var letters = /^[A-Za-z]+$/;
            if (user_name.value.match(letters))
            {
            return true;
            } else
            {
            alert('Username must have alphabet characters only');
            user_name.focus();
            return false;
            }
            }

            function allnumeric(contact, mx, my)
            {
            var numbers = /^[0-9]+$/;
            if (contact.value.match(numbers) || contact.value >= my || contact.value < mx)
            {
            return true;
            } else
            {
            alert('contact must have numeric characters only');
            contact.focus();
            return false;
            }
            }

            function ValidateEmail(email)
            {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (email.value.match(mailformat))
            {
            return true;
            } else
            {
            alert("You have entered an invalid email address!");
            email.focus();
            return false;
            }
            }

            if (user_name.value == ""){
            alert("username should not be empty")
                    return false;
            }
            if (pass_word.value == ""){
            alert("password should not be empty")
                    return false;
            }
            if (email.value == ""){
            alert("email should not be empty")
                    return false;
            }
            return true;
        </script>
    </head>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg{
            /*background-color: #e4606d;*/
            height:100%;
            background-position:center;
            background-repeat: no-repeat;
            background-size: cover;
        }  
        #demo{

            color:#000;
            font-family:cursive;

        }

        #demo1{
            color:#040505;
            font-family: cursive;
            padding-bottom: 10px;
        }
        .right{
            position: absolute;
            right: 50px;
            width: 500px;
            /*order:3px black dashed;*/
            padding: 10px;
        }
        

    </style> 
    <!--<body onload="document.register.user_name.focus();">-->
    <?php
    include 'navbar2.php';
    ?>
    <?php
    include 'carousel.php';
    ?> 
        <div class="bg"> 
            <div class="container">
               <div class="form-group">
                    <form name='register'  id='register'  action="connect.php" method="post" onsubmit="return validation()">
                        <div class="right">
                            <table class="table-hover responsive">

                                <tbody>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <h4 id="demo"><b>Create Account</b></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label id="demo1"><b>Your Name:</b></label>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label id="demo1"><b>Username:</b></label>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="user_name" size="12" name="user_name" placeholder="Enter Username">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label id="demo1"><b>E-mail:</b></label>
                                        </td>
                                        <td>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label id="demo1"><b>Password:</b></label>
                                        </td>
                                        <td>
                                            <input type="password" class="form-control" id="pass_word" name="pass_word" placeholder="Enter Password" minlength="5">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label id="demo1"><b>Confirm Password:</b></label>
                                        </td>
                                        <td>
                                            <input type="password" class="form-control" id="confirm_pass" name="confirm_pass" placeholder="Confirm Password" minlength="5">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label id="demo1"><b>Contact:</b></label>
                                        </td>
                                        <td>
                                            <input type="integer" class="form-control" id="contact" name="contact" placeholder="Enter Contact" minlength="1" max="10">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Submit</button>    <button type="reset" class="btn btn-primary">Cancel</button>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </form>
                </div>




            </div>
        </div>   <br><br><br><br><br><br><br><br><br><br>
        <?php
        include("footer.php");
        ?>    
        </body>
        </html>
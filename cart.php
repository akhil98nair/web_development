<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "turningpage");

if (isset($_POST["add_to_cart"])) {
    if (isset($_SESSION["cart"])) {
        $item_array_product_id = array_column($_SESSION["cart"], "product_id");
        if (!in_array($_GET["product_id"], $item_array_product_id)) {
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'product_id' => $_GET["product_id"],
                'p_name' => $_POST["hidden_name"],
                'price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][$count] = $item_array;
        } else {
            echo '<script>alert("Item Already Added")</script>';
        }
    } else {
        $item_array = array(
            'product_id' => $_GET["product_id"],
            'p_name' => $_POST["hidden_name"],
            'price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"]
        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["cart"] as $keys => $values) {
            if ($values["product_id"] == $_GET["product_id"]) {
                unset($_SESSION["cart"][$keys]);
                //echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>cart</title>
        <script src="other/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="js/bootstrap.min.js"></script>
    </head>
    <style>
        #a{
            padding-bottom: 10px;
        }
        #b{
            height: 100;
            width: 100;
        }
    </style>
    <body>
        <nav class="navbar navbar-expand-md bg-info navbar-dark sticky-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">

                <!-- Brand/logo -->
                <a class="navbar-brand" href="#"  ><img src="images/kokila/1 (14).png" alt="logo" class="rounded-circle" style="width:50px;"></a>

                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link disabled text-white"><b>Hello</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="homepage.php">Home</a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                            Creative
                        </a>
                        <div class="dropdown-menu bg-info ">
                            <a class="dropdown-item text-dark" href="#">Potraits</a>
                            <a class="dropdown-item text-dark" href="#">Commisioned Drawings</a>
                            <a class="dropdown-item text-dark" href="#">Mobiles</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Loginout.php">Logout</a>

                    </li>
                </ul>
            </div>
        </nav>

        <br />
        <div class="container">
            <br />
            <h3 align="center"><a href="cart.php" title="Cart">Gallery</a></h3>
            <br /><br />
            <?php
            $query = "SELECT * FROM products ORDER BY product_id ASC";
            $result = mysqli_query($connect, $query);
            echo'<table>';
            echo'<table class="table-responsive">';
            ?>
            <?php
            echo'<tr>';
            $i = 0;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    if ($i < 4) {
                        echo '<td>';
                        ?>    
                        <div class="container" id='a'>
                            <form method="post" action="cart.php?action=add&product_id=<?php echo $row["product_id"]; ?>">
                                <div class="card" style="width:200">
                                    <img class="card-img-top" src="images/<?php echo $row["image"]; ?>" alt="Card image" id="b">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $row["p_name"]; ?></h5>
                                        <p class="card-text">some text missing</p>
                                        <h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4>
                                        <input type="text" min="1" max="100" name="quantity" value="1" class="form-control">
                                        <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
                                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php echo '</td>';
                        ?>
                        <?php
                        $i++;
                    } else {
                        $i = 0;
                        echo'<tr>';
                        echo '<td>';
                        ?>        
                        <div class="card" style="width:100%">
                            <img class="card-img-top" src="images/<?php echo $row["image"]; ?>" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row["p_name"]; ?></h5>
                                <p class="card-text">some text missing</p>
                                <h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4>
                                <input type="text" name="quantity" value="1" class="form-control">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
                            </div>
                        </div>
                        <?php
                        echo '</td>';
                        $i++
                        ?>
                        <?php
                    }
                    ?>
                    <?php
                }
                echo '</tr>';
                echo '</table>';
            }


            echo'</div>';
            echo'</div>';
            ?>
            <div style="clear:both"></div>
            <br />
            <h3>Order Details</h3>
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th wproduct_idth="40%">Item Name</th>
                            <th wproduct_idth="10%">Quantity</th>
                            <th wproduct_idth="20%">Price</th>
                            <th wproduct_idth="15%">Total</th>
                            <th wproduct_idth="5%">Action</th>
                        <a th wproduct_idth="5%" href="checkout.php">checkout</a></th>
                        </tr>
                        <?php
                        if (!empty($_SESSION["cart"])) {
                            $total = 0;
                            foreach ($_SESSION["cart"] as $keys => $values) {
                                ?>
                                <tr>
                                    <td><?php echo $values["p_name"]; ?></td>
                                    <td><?php echo $values["item_quantity"]; ?></td>
                                    <td>Rs. <?php echo $values["price"]; ?></td>
                                    <td>Rs. <?php echo number_format($values["item_quantity"] * $values["price"], 2); ?></td>
                                    <td><a href="cart.php?action=delete&product_id=<?php echo $values["product_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                                </tr>
                                <?php
                                $total = $total + ($values["item_quantity"] * $values["price"]);
                            }
                            ?>
                            <tr>
                                <td colspan="3" align="right">Total</td>
                                <td align="right">Rs. <?php echo number_format($total, 2); ?></td>
                                <td></td>
                            </tr>
                            <?php
                        }
                        ?>

                    </table>
                </div>
            </div>
        </div>
        <br />
    </body>
</html>


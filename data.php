<?php
function get_price($name)
{
    $products = [
            "manishpaul"=>200,
            "selenagomez"=>1000,
            "abdulkalam"=>5000
    ];
    foreach($products as $product=>$price)
    {
            if($product==$name)
            {
                    return $price;
            }
    }
}
?>
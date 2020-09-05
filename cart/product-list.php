<div id="product-grid">
    <div class="txt-heading">
        <div class="txt-heading-label">Products</div>
    </div>
    <?php
    $query = "SELECT * FROM fsale";
    $product_array = $shoppingCart->getAllProduct($query);
    if (! empty($product_array)) {
        foreach ($product_array as $key => $value) {
            ?>
        <div class="product-item">
        <form method="post"
            action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
            <div class="product-image">
                <img src="<?php echo $product_array[$key]["photo"]; ?>">
                <div class="product-title">
                    <?php echo $product_array[$key]["crop"]; ?>
                </div>
            </div>
            <div class="product-footer">
                <div class="float-right">
                    <?php echo "<br> quantity available:".$product_array[$key]['quan']." ".$product_array[$key]['unit']."<br>"?>
                    <?php $Fname = $shoppingCart->getFname($product_array[$key]["id"]);?>
                    <?php foreach ($Fname as $row => $val){
                     echo $Fname[$row]['name']."<br>"; 
                     echo $Fname[$row]['contact']."<br>";
                     echo $Fname[$row]['village']."<br>"; 
                 }
                     ?> 

                    <input type="text" name="quantity" value="1"
                        size="2" class="input-cart-quantity" /><input type="image"
                        src="add-to-cart.png" class="btnAddAction" />
                </div>
                <div class="product-price float-left" id="product-price-<?php echo $product_array[$key]["code"]; ?>"><?php echo "RS.".$product_array[$key]["price"]; ?></div>
                
            </div>
        </form>
    </div>
    <?php
        }
    }
    ?>
</div>
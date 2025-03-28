<?php
include("DBconfig.php");

$sql = "SELECT * FROM product WHERE product_id = 1"; // or dynamic via GET
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $product = mysqli_fetch_assoc($result);
} else {
    echo "Product not found.";
    exit;
}
?>

<h1><?php echo "Pre-Built PC's"?></h1>

<div class="container">
    <div class="row">
        <div class="col-xs-3 pet-list-item">
        <img src="/Project/images/<?php echo htmlspecialchars($product['image']); ?>" class="pull-left img-rounded" width="300" alt="Product Image" />


        </div>
        <div class="col-xs-6">
            <p>
                <?php echo $product['name']; ?>
            </p>

            <table class="table">
                <tbody>
                    <tr>
                        <th>Product Name</th>
                        <td><?php echo $product['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><?php echo nl2br(htmlspecialchars($product['description']));?></td>
                    </tr>
                    <tr>
                    <th>Price</th>
                        <td>€<?php echo number_format($product['price'], 2); ?></td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td><?php 
                        if($product['quantity']>=10){
                            echo "In Stock";
                        }
                        else if($product['quantity']<=5){
                            echo "Low Stock";
                        }
                        else if($product['quantity'<=0]){
                            echo "Out Of Stock";
                        }
                        ?></td>
                    </tr>
                    <tr>
                    </tr>
                    <form method="post" action="add_to_cart.php">
                        <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                        <input type="number" name="quantity" value="1" min="1" style="width: 60px;">
                            <input type="submit" value="Add to Cart" class="btn btn-success">
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>


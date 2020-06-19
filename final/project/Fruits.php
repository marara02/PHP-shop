<?php
include_once 'database/authorization.php';
include_once 'Bakkery.php';
session_start();
$info="";
if (isset($_POST['id']) && $_POST['id']!=" "){
    $id = mysqli_real_escape_string($link, $_POST['id']);
    $query = "SELECT * FROM product WHERE product_id = ?";
    $stmt = mysqli_stmt_init($link);
    if(!mysqli_stmt_prepare($stmt, $query)){
        echo "SQL statement failed.";
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }
    $row = mysqli_fetch_assoc($result);
    $name = $row['product_name'];
    $id = $row['product_id'];
    $price = $row['price'];
    $cartArray = array(
        $id=>array(
            'name'=>$name,
            'id'=>$id,
            'price'=>$price,
            'quantity'=>1)
    );

    if(empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $info = "<div class='box'>Product is added to your cart!</div>";
    }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);  //return all elements which in array
        if(in_array($id,$array_keys)) {
            $info = "<div class='box'>
            Product is already added to your cart!</div>";
        } else {
            $_SESSION["shopping_cart"] = array_merge(
                $_SESSION["shopping_cart"],
                $cartArray
            );
            $info = "<div class='box'>Product is added to your cart!</div>";
        }

    }
}
$result = mysqli_query($link,"SELECT * FROM `product`WHERE category_id=4");
echo "<div class='wrapper1'>";
while($row = mysqli_fetch_assoc($result)){
    echo "
        <div class='box1' style='display: flex; flex-direction: column; background-color: #239B56; color: #fff; border-radius: 5px; padding: 20px; font-size: 80%;'>
            <form method='post' action=''>
                <input type='hidden' name='id' value=".$row['product_id']." />
                <div class='imageAll' style=' text-align: center;padding-left: 5px;padding-right: 5px;'><img src='".$row['img']."' width='100%' height='90%'></div>
                <div class='name'>".$row['product_name']."</div>
                <div class='price'>".$row['price']."tg</div>
                <button type='submit' class='buy1'>Add to cart</button>
                     <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
                <script >
    $(document) . ready(function () {
        $('.buy1') . click(function () {
            Swal . fire('Product added to basket:)');
        });
    });
            </script >
            </form >
            </form>
        </div>";
}
echo "</div>";
mysqli_close($link);
?>
</body>
</body>
</html>

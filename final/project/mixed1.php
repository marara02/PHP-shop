<?php
include_once 'database/authorization.php';
session_start();
if(!isset($_SESSION['admin_id'])){
    header("Location: main.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>onlineshop.kz</title>
    <!--<link rel="stylesheet" type="text/css" href="CSS.css">-->
    <link rel="stylesheet" type="text/css" href="CSS/main.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
    <link rel="shortcut icon" href="shop.png" type="png">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Six+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <link rel = "icon" href = "shop.png" type = "image/x-icon">
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
    <script type="text/javascript" src="functions.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include_once("header.php"); ?>

<hr style="color: black;">
<a href="insertpage.php" class='change'>Add to products</a>
<?php
$result = mysqli_query($link,"SELECT * FROM `product` ORDER BY category_id");
echo "<div class='wrapper1'>";
while($row = mysqli_fetch_assoc($result)){
    echo "
        <div class='box1' style='display: flex; flex-direction: column; background-color: #239B56; color: #fff; border-radius: 5px; padding: 20px; font-size: 80%;'>
            <form method='get' action='adminChange.php'>
                <span id='infor'></span>
                <div class='imageAll' style=' text-align: center;padding-left: 5px;padding-right: 5px;'><img src='".$row['img']."' width='100%' height='80%'></div>
                <div class='name'>".$row['product_name']."</div>
                <div class='price'>".$row['price']."tg</div>
                <input type='hidden' name='id' value='".$row['product_id']."'>
                <input type='number' class='cost' name='cost' placeholder='New cost'>
                <input type='submit' class='change' name='change' value='Delete'>
                <input type='submit' class='change' name='change' value='Update'>
            </form>
        </div>";
}
echo "</div>";
mysqli_close($link);
?>



</body>
</html>
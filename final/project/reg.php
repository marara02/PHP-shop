<?php
require_once('database/config.php');
?>
<?php
if(isset($_POST)) {
    $u_fullname = $_POST['u_fullname'];
    $u_email = $_POST['u_email'];
    $u_address = $_POST['u_address'];
    $u_telnum = $_POST['u_telnum'];
    $u_card_n = $_POST['u_card_n'];
    $u_card_e = $_POST['u_card_e'];
    $u_card_c = $_POST['u_card_c'];
    $sql="INSERT INTO user (`u_fullname`,`u_email`,`u_address`,`u_telnum`,`u_card_n`,`u_card_e`,`u_card_c`) VALUES(?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$u_fullname, $u_email, $u_address, $u_telnum,$u_card_n,$u_card_e,$u_card_c]);
    if ($result) {
        echo 'Your order will come as soon as possible';
    } else {
        echo 'Something went wrong;(';
    }
}
else{
    echo 'No data';
}

<?php
require_once('config.php');
?>
<?php
if(isset($_POST)) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $telnum = $_POST['telnum'];
    $password = sha1($_POST['password']);
    $sql = "INSERT INTO registration (full_name,email,telnum,password) VALUES(?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$full_name, $email, $telnum, $password]);

    if ($result) {
        echo 'Successfully saved';
    } else {
        echo 'There were errors while saving the data.';
    }
}
else{
    echo 'No data';
}
?>
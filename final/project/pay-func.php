<?php

if (isset($_POST)) {

    $cnumber = mysqli_real_escape_string($link, $_POST['cnumber']);
    $expiry = mysqli_real_escape_string($link, $_POST['expiry']);
    $cvc = mysqli_real_escape_string($link, $_POST['cvc']);

    try {
        $query = "INSERT INTO card ( cnumber, expiry, cvc) VALUES (?,?,?)";
        $stmt = mysqli_stmt_init($link);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            throw new Exception("Oops, operation has mistakes");
        }
        else {
            mysqli_stmt_bind_param($stmt, "sss", $cnumber, $expiry, $cvc);
        }
    }
    catch (Exception $exception){
        echo $exception->getMessage();
    }

    $result = mysqli_stmt_execute($stmt);
    $stmt->close();
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


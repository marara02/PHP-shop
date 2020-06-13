<?php

include_once 'database/authorization.php';

if (!empty($_POST['user']) && !empty($_POST['pass1'])) {
    $user = $_POST['user'];
    $password = $_POST['pass1'];
    if ($user == "mnz" && $password == '123456789') {
        $result = array(
            'all' => "Welcome admin:" . $user
        );
    } else {
        $result = array(
            'mim' => "Goodbye"
        );
    }
} else {
    $result = array(
        'mim' => "Go away"
    );
}
echo json_encode($result);
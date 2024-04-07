<?php
    const LOGIN = 'theacher';
    const PASSWORD = '123456';

    $status;
    if ($_POST['login'] === LOGIN && $_POST['password'] === PASSWORD) {
        $status = 'ok';
    } else {
        $status = 'error';
    }

    echo json_encode(array( 'status' => $status ));
?>
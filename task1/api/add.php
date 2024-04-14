<?php 

include('../../modules/product.php');

try {
    array_push(
        $GLOBALS['task1']['products'],
        new Product($_POST['name'], $_POST['price'])
    );
    
    echo json_encode(array('status' => 'ok'));
} catch (Exception $e) {
    echo json_encode(array('status' => 'error'));
}

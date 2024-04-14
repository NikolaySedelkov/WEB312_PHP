<?php
    include('../modules/product.php');
    $GLOBALS['task1'] = array(
        'products' => array(
            new Product("Шоколад", 120),
            new Product("Молока", 79),
            new Product("Хлеб", 28)
        )
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='task1/scripts/main.js' defer></script>
</head>
<body>
    <form
        id='form_product-add'
    >
        <table>
            <caption>Добавить новый продукт</caption>
            <tbody>
                <tr>
                    <td>Название</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Цена</td>
                    <td><input type="number" name="price"></td>
                </tr>
            </tbody>
        </table>
        <button>Добавить</button>
    </form>
</body>
</html>
<?php 
    include('./classes/Animal.php');
    include('./classes/Tigr.php');

    $animal = new Animal("барсик", 4, 15.7);
    $tigr   = new Tigr("бобик", 20, 55.99, 112);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <table>
            <caption>
                Animal
            </caption>
            <tr>
                <td>Имя</td><td><?php echo $animal->name;?></td>
            </tr>
            <tr>
                <td>Возраст</td><td><?php echo $animal->age;?></td>
            </tr>
            <tr>    
                <td>Вес</td><td><?php echo $animal->weight;?></td>
            </tr>
            <tr>    
                <td>ID</td><td><?php echo $animal->getId();?></td>
            </tr>
        </table>

        <table>
            <caption>
                Tigr
            </caption>
            <tr>
                <td>Имя</td><td><?php echo $tigr->name;?></td>
            </tr>
            <tr>
                <td>Возраст</td><td><?php echo $tigr->age;?></td>
            </tr>
            <tr>    
                <td>Вес</td><td><?php echo $tigr->weight;?></td>
            </tr>
            <tr>    
                <td>Скорость</td><td><?php echo $tigr->velocity;?></td>
            </tr>
            <tr>    
                <td>ID</td><td><?php echo $tigr->getId();?></td>
            </tr>
        </table>
    </head>
    <body>
        
    </body>
</html>
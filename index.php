<?php 
    include('./classes/Animal.php');
    include('./classes/Tigr.php');

    include('./classes/abstract examples/geometry/Square.php');
    include('./classes/abstract examples/geometry/Circle.php');

    include('./classes/Pratice21_04.php');

    $phone1 = new Phone(
        'iPhone 12',
        999.99,
        'Latest iPhone model',
        'Apple',
        'A14 Bionic',
        6,
        1,
        256,
        'iOS'
    );
     
    $phone2 = new Phone(
        'Galaxy S21',
        899.99,
        'Flagship Android smartphone',
        'Samsung',
        'Snapdragon 888',
        8,
        2,
        128,
        'Android'
    );
     
    $phone3 = new Phone(
        'Pixel 5',
        699.99,
        'Google Pixel series',
        'Google',
        'Snapdragon 765G',
        8,
        1,
        128,
        'Android'
    );
     
    $monitor1 = new Monitor(
        'ASUS ROG Strix XG27WQ',
        599.99,
        '27-inch gaming monitor',
        'ASUS',
        27,
        144,
        ['HDMI', 'DisplayPort']
    );
     
    $monitor2 = new Monitor(
        'Dell UltraSharp U2720Q',
        799.99,
        '27-inch 4K monitor',
        'Dell',
        27,
        60,
        ['HDMI', 'DisplayPort', 'USB-C']
    );

    $products = array(
        $phone1, $phone2, $phone3,
        $monitor1, $monitor2
    );

    //$shape = new Shape(100, 20);
    $s = new Square(1, 1, 10);
    $c = new Circle(2, 2, 5);

    $animal = new Animal("барсик", 4, 15.7);
    $tigr   = new Tigr("бобик", 20, 55.99, 112);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $s->getX();?></title>
    </head>
    <body>
        <?php
            foreach($products as $item) {
                echo $item->getProduct();
            } 
        ?>
        <hr/>
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
            <?php
                $data = $animal->getDiseases();
                $count_data = count($data);
                echo "
                    <tr>
                        <td rolspan=$count_data>Болезни</td><td>{$data[0]}</td>
                    </tr>
                ";

                for($i = 1; $i < count($data); ++$i) {
                    echo "
                    <tr>
                        <td></td><td>{$data[$i]}</td>
                    </tr>
                ";
                }
            ?>
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
    </body>
</html>
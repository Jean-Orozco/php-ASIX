<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Demo ASIX</title>
    </head>
    <body>
        <h1><?php
            $y = 4;
            $c = 4;
            echo "My first PHP script!<br>";
            echo $y + $c;
            echo "<br>hola mundo!<br>";
            $palabra = "hola";
            echo $palabra . " mundo<br>";
            echo "El resultado de $y y $c es: " ,  $y + $c ;
//            Array
//            $book = [
//                    "dune",
//                    "harry potter",
//                    "el seño de los anillos",
//                    "matrix"
//                ];
//            echo $book[1];
//            var_dump($book);


            $book = [

                [   "tile" => "dune",
                    "autor" => "",
                    "realaseyear" => "1965"
                ],
                [
                    "tile" => "harry potter",
                    "autor" => "",
                    "realaseyear" => "1937"
                ],
                [
                    "tile" => "el señode los anillos",
                    "autor" => "",
                    "realaseyear" => "1955"
                ],
                [
                    "tile" => "matrix",
                    "autor" => "",
                    "realaseyear" => "1978"
                ]
            ]
            ?>
        </h1>
        <p>lista de libros:</p>
    <ol>
        <?php foreach ($book as $books) :?>
            <li><?= $books ?></li>
        <?php endforeach ?>
    </ol>
    </body>
</html>
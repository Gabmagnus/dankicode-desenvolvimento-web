<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/caderno.css">
</head>
<body>
    <div class="caderno">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <main>
            <h1>AULA 1 - MODULO 6 - FOREACH</h1>
                <code>
                    <?php 
                        $arr = ['G','R','E','M','I','O'];
                        
                        for ($i=0; $i < count($arr); $i++) { 
                            echo $arr[$i];
                        }
                        echo '<hr>';
                        echo "<br>";

                        for ($y=1; $y <= 3; $y++) {
                            for ($x=1; $x <= 3; $x++) { 
                                echo " [x:$x:y:$y] ";
                            }
                            echo "<br>";
                            echo "<br>";
                        }
                        echo '<hr>';
                        foreach ($arr as $key => $value) {
                            echo "$key - $value  ||  ";
                        }
                    ?>
                </code>
        </main>
    </div>
</body>
</html>
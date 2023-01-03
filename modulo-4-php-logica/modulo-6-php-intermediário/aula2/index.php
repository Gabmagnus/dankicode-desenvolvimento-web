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
            <h1>AULA 2 - MODULO 6 - Array multidimensional</h1>
                <code>
                    <?php 
                    $arr = [
                        ['Gabriel', 'Joao', 'Denilson'],
                        ['26', '14', '27']];
                        for ($x=0; $x < count($arr[0]); $x++) { 
                            for ($j=0; $j < count($arr[1]); $j++) { 
                                echo $arr[0][$x];
                                echo ' : ';
                                echo $arr[1][$j];
                                echo '<br>';
                            }
                        }
                    ?>

                </code>
        </main>
    </div>
</body>
</html>
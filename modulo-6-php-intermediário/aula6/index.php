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
            <h1>AULA 6 - MODULO 6 - FUNÇOES PARA STRINGS</h1>
                <code>
                    <?php 
                        $content = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt nemo repellat aperiam voluptatem beatae similique. Labore doloremque praesentium ab animi laudantium placeat! Dolor molestias placeat laboriosam, obcaecati natus dolorem quaerat!';

                        echo substr($content, 0, 20);

                        $nome = 'Gabriel Magnus Oliveira';
                        $nomes = explode(' ', $nome);
                        $nome2 = implode(' ', $nomes);

                        echo "$nome <br> $nomes <br> $nome2";
                    ?>
                </code>
        </main>
    </div>
</body>
</html>
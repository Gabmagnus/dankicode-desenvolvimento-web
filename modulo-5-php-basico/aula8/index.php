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
            <h1>AULA 1 - MODULO 5 - ARRAYS</h1>
                <code>
                    <?php
                        // Jeito errado!
                        // $nome1 = "Denilson";
                        // $nome2 = "Denilson";
                        // $nome3 = "Denilson";

                        $nomes = ["Denilson", "Joelson", "Gabriel"];
                        $nomes[100] = "Jeremias";
                        $nomes[true] = "minóxidil"; // NOMES 1
                        $nomes[false] = "calvice"; //NOMES 0
                        $nomes["gremio"] = "Gabriel";

                        echo "<pre>";
                        print_r($nomes);
                        echo "</pre>"
                    ?>
                </code>
        </main>
    </div>
</body>
</html>
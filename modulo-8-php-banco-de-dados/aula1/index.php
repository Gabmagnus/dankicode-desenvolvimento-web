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
            <h1>AULA 1 - MODULO 8 - USANDO PDO</h1>
                <code>
                    <?php
                        // define('HOST_NAME', 'db5011414953.hosting-data.io');
                        // define('DATABASE', 'dbs9629988');
                        // define('USER', 'dbu99416');
                        // define('PASSWORD', 'DVyT48PGjRCXXNC');

                        
                        define('HOST_NAME', 'localhost');
                        define('DATABASE', 'modulo_8');
                        define('USER', 'root');
                        define('PASSWORD', '');
                        $pdo = null;

                        try {
                            $pdo = new PDO("mysql:host=".HOST_NAME.
                            ";dbname=".DATABASE, USER, PASSWORD);
                            } catch (PDOException $e) {
                            echo "Error!:" . $e->getMessage() . "<br/>";
                            die();
                            }
                    ?>
                </code>
        </main>
    </div>
</body>
</html>
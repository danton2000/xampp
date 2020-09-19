<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP+FIREBIRD</title>
</head>
<body>
    <h1>Dados da tabela Cliente</h1>
</body>
</html> -->

<?php

// phpinfo();


// foreach(PDO::getAvailableDrivers() as $driver) {
//     echo $driver."<br>";
// }

$host = 'firebird::host=127.0.0.1;dbname=c:\Bitcom\Dados\DADOS.FDB';
$password = 'masterkey';
$username = 'SYSDBA';
  
$firebird = new \PDO($host, $username, $password, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);

//montamos e rodamos a query   
$query = $firebird->query("SELECT * FROM Cliente");
$query->execute();
 
//retornamos todos os registros (fetchAll) em forma de uma lista de Objetos (FECH_OBJ)
$registros = $query->fetchAll(PDO::FETCH_OBJ);

//percorremos a lista retornando item por item e imprimindo a propriedade que desejamos (neste caso: NOME)
foreach($registros as $r) {
    echo $r->CLI_RAZAO."<br>";
}
        



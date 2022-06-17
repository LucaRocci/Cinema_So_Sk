<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Scheda Film</title>
</head>
<body>
    <table>
            <?php
                $idfilm = $_GET["idfilm"]; //$_SESSION["idfilm"];
                $hostname = "localhost";
                $dbuser = "root";
                $dbpwd = "";
                $db = "cinema";
                $conn = new mysqli($hostname, $dbuser, $dbpwd,$db) or die("Connect failed: %s\n". $conn -> error);
                $sql = "SELECT * FROM film WHERE IDfilm=".$idfilm;
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    $row = $result->fetch_assoc();
                    echo "<tr><td>Titolo</td><td>".$row["Title"]."</td></tr>";
                    echo "<tr><td>Durata</td><td>".$row["Length"]."</td></tr>";
                    echo "<tr><td>AnnoRilascita</td><td>".$row["ReleaseYear"]."</td></tr>";
                    echo "</table>";                
                    echo "<h1>".$row["Title"]."</h1>";
                    echo "<h3>Trama</h3><p>".$row["Plot"]."</p>";
                } else {
                echo "</table><br><h1>Problema col db, contattare assistenza</h1>";
                }
                $conn->close();
            ?>
    
</body>
</html>
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
    <?php
        require("DBConnection.php");
        
        if(!isset($_GET["idfilm"])){                
            header("Location: index.php");
            exit();
        }

        try{                    
            $dbconn = new DBConnection();

            $idfilm = $_GET["idfilm"];
            $query = "SELECT * FROM film WHERE IDfilm=".$idfilm;
            
            $result_array = $dbconn->selectQuery($query)[0];
            $dbconn->close();

            printFilm($result_array);

            echo "<a href='index.php'>Torna alla pagina principale</a>";
        }catch(DBConnectionException $e){
            echo "<p><h1>".$e->getMessage()."</h1></p>";
            http_response_code($e->getCode());
            exit();
        }

        function printFilm($film){
            echo "<table>";
            echo "<tr><td>Titolo</td><td>".$film["Title"]."</td></tr>";
            echo "<tr><td>Durata</td><td>".$film["Length"]."</td></tr>";
            echo "<tr><td>AnnoRilascita</td><td>".$film["ReleaseYear"]."</td></tr>";
            echo "</table>";                
            echo "<h1>".$film["Title"]."</h1>";
            echo "<img src='".$film["img"]."' alt='Locandina ".$film["Title"]."'>";
            echo "<h3>Trama</h3><p>".$film["Plot"]."</p>";
        }
    ?>
    
</body>
</html>
<?php
     $hostname = "localhost";
     $dbuser = "root";
     $dbpwd = "";
     $db = "cinema";
     $conn = new mysqli($hostname, $dbuser, $dbpwd,$db) or die("Connect failed: %s\n". $conn -> error);
     $sql = "SELECT * FROM film";
     $result = $conn->query($sql);
 
     if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "id: " . $row["IDfilm"]. " - Title: " . $row["Title"]. "<br> " . $row["Plot"]. "<br>";
     }
     } else {
     echo "0 results";
     }
     $conn->close();
?>
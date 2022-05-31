<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cinema";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT film_id,title,description,release_year,genre_name FROM film f INNER JOIN genre ON f.genre_id = genre.genre_id LIMIT 100;";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {    
        $arr = [];
        while($row = $result->fetch_assoc()) {
            $arr[] = [$row["film_id"],$row["title"],$row["description"],$row["release_year"],$row["genre_name"]];                                                
        }
        echo json_encode($arr);        
} else {
  echo "";
}

?>
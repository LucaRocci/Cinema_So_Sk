<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Programmazione Cinema</title>
</head>

<body>
    <header>
        <h1>Programmazione Cinema Torino dal 27/05/2022 al 09/06/2022</h1>
    </header>
					
    <table>
            <thead>
                 <tr>
                    <th class="day">GIORNO</th>
                    <th scope="col" style="width:33%">SALA 1</th>
                    <th scope="col" style="width:33%">SALA 2</th>
                    <th scope="col" style="width:33%">SALA 3</th>    
                </tr>
            </thead>
            <tbody>

                <?php
                    require("DBConnection.php");

                    try{
                        $dbconn = new DBConnection();
                        $result_array = $dbconn->selectQuery("SELECT IDfilm,Title FROM film");
                        $dbconn->close();
                        
                        printFilms($result_array);


                    }catch(DBConnectionException $e){
                        echo "<p><h1>".$e->getMessage()."</h1></p>";
                        http_response_code($e->getCode());
                        exit();
                    }
                    
                    function printFilms(array $films){
                        $a_giorni = ["Venerdì","Sabato","Domenica","Lunedì"];
                        $spettacoli = ["15.00","17:30","20.00","22.30"];

                        echo "<tr>";
                        for($giorno=0; $giorno<4; $giorno++){
                            echo "<tr>";
                            echo "<td><strong>".$a_giorni[$giorno]."</strong></td>";
                            for($sala=0; $sala<3; $sala++){
                                echo "<td>";
                                $nspettacoli = 4;
                                if($giorno%4==0){
                                    $nspettacoli = 2;
                                }
                                for($j=0; $j<$nspettacoli; $j++){
                                    echo "<p><span class='ora'>";
                                    if($nspettacoli==2){
                                        echo $spettacoli[$j+2];
                                    }
                                    else{
                                        echo $spettacoli[$j];
                                    }
                                    echo "</span>";
                                    $randomFilm = $films[rand(0,count($films)-1)];
                                    echo "<strong><a href='film.php?idfilm=".$randomFilm["IDfilm"]."'>".$randomFilm["Title"]."</a></strong></p>";
                                }
                                echo "</td>";
                            }
                            echo "</tr>";
                        }
                    }
                ?>
                </tbody>
    </table>
</body>
</html>


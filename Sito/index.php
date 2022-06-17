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
                    

                <?php
                    $hostname = "localhost";
                    $dbuser = "root";
                    $dbpwd = "";
                    $db = "cinema";
                    $conn = new mysqli($hostname, $dbuser, $dbpwd,$db) or die("Connect failed: %s\n". $conn -> error);
                    $sql = "SELECT * FROM film";
                    $result = $conn->query($sql);
                    /*if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "id: " . $row["IDfilm"]. " - Title: " . $row["Title"]. "<br> " . $row["Plot"]. "<br>";
                    }
                    } else {
                    echo "0 results";
                    }*/
                    $conn->close();
                    $a_giorni = ["Venerdì","Sabato","Domenica","Lunedì"];
                    $spettacoli = ["15.00","17:30","20.00","22.30"];
                    //echo "<tbody><tr>";
                    for($giorno=0; $giorno<4; $giorno++){
                            echo "<tbody><tr>";
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
                                    echo "<strong><a href='film.php?idfilm=1'>"."Alla ricerca della felicità"."</a></strong></p>";
                                }
                                echo "</td>";
                        }
                        echo "</tr></tbody>";
                    }
                    ?>
                    <!--<tbody>
                    <tr>
                            <td>
                                <strong>Venerdì</strong>
                            </td>

                            <td>
                                <p><span class="ora">20.00</span>
                               <strong><a href="film.php?idfilm=1">Alla ricerca della felicità</a></strong></p>
                                    
                                <p><span class="ora">22.30</span> 
                                <strong><a href="film.php?idfilm=1" title="Top Gun - Maverick">Top Gun - Maverick</a></strong></p>
                            </td>
                        
                            <td>
                                <p><span class="ora">20.00</span> 
                                 <strong><a href="/dreamlight/index.cfm/doctor-strange-nel-multiverso-della-follia_1-20-3872-0.html" title="Doctor Strange nel Multiverso della Follia">Doctor Strange nel Multiverso della Follia</a></strong></p>
                                    
                                <p><span class="ora">22.30</span> 
                                <strong><a href="/dreamlight/index.cfm/doctor-strange-nel-multiverso-della-follia_1-20-3872-0.html" title="Doctor Strange nel Multiverso della Follia">Doctor Strange nel Multiverso della Follia</a></strong></p>                                    
                            </td>
                        
                            <td>
                                <p><span class="ora">20.00</span> 
                                <strong><a href="/dreamlight/index.cfm/nostalgia_1-20-3880-0.html" title="Nostalgia">Nostalgia</a></strong></p>
                                    
                                <p><span class="ora">22.30</span> 
                                <strong><a href="/dreamlight/index.cfm/nostalgia_1-20-3880-0.html" title="Nostalgia">Nostalgia</a></strong></p>
                            </td>
                    </tr>
                </tbody>
                    
                <tbody>
                    <tr> 
                            <td>
                                <strong>Sabato</strong>
                            </td>
                        
                            <td>                        
                                <p><span>15.00</span> 
                                <strong><a href="/dreamlight/index.cfm/top-gun-maverick_1-20-3877-0.html" title="Top Gun - Maverick">Top Gun - Maverick</a></strong></p>
                                    
                                <p><span>17.30</span> 
                                <strong><a href="/dreamlight/index.cfm/top-gun-maverick_1-20-3877-0.html" title="Top Gun - Maverick">Top Gun - Maverick</a></strong></p>
                                    
                                <p><span>20.00</span> 
                                <strong><a href="/dreamlight/index.cfm/top-gun-maverick_1-20-3877-0.html" title="Top Gun - Maverick">Top Gun - Maverick</a></strong></p>
                                    
                                <p><span>22.30</span> 
                                <strong><a href="/dreamlight/index.cfm/top-gun-maverick_1-20-3877-0.html" title="Top Gun - Maverick">Top Gun - Maverick</a></strong></p>                                   
                            </td>
                        
                            <td>                            
                                <p><span>15.00</span> 
                                <strong><a href="/dreamlight/index.cfm/doctor-strange-nel-multiverso-della-follia_1-20-3872-0.html" title="Doctor Strange nel Multiverso della Follia">Doctor Strange nel Multiverso della Follia</a></strong></p>
                                    
                                <p><span>17.30</span> 
                                <strong><a href="/dreamlight/index.cfm/doctor-strange-nel-multiverso-della-follia_1-20-3872-0.html" title="Doctor Strange nel Multiverso della Follia">Doctor Strange nel Multiverso della Follia</a></strong></p>
                                    
                                <p><span>20.00</span> 
                                <strong><a href="/dreamlight/index.cfm/doctor-strange-nel-multiverso-della-follia_1-20-3872-0.html" title="Doctor Strange nel Multiverso della Follia">Doctor Strange nel Multiverso della Follia</a></strong></p>
                                
                                <p><span>22.30</span> 
                                <strong><a href="/dreamlight/index.cfm/doctor-strange-nel-multiverso-della-follia_1-20-3872-0.html" title="Doctor Strange nel Multiverso della Follia">Doctor Strange nel Multiverso della Follia</a></strong></p>                                    
                            </td>
                        
                            <td>
                            
                                <p><span>15.00</span> 
                                            <strong><a href="/dreamlight/index.cfm/nostalgia_1-20-3880-0.html" title="Nostalgia">Nostalgia</a></strong></p>
                                    
                                            <p><span>17.30</span> 
                                            <strong><a href="/dreamlight/index.cfm/nostalgia_1-20-3880-0.html" title="Nostalgia">Nostalgia</a></strong></p>
                                    
                                            <p><span>20.00</span> 
                                            <strong><a href="/dreamlight/index.cfm/nostalgia_1-20-3880-0.html" title="Nostalgia">Nostalgia</a></strong></p>
                                    
                                            <p><span>22.30</span> 
                                            <strong><a href="/dreamlight/index.cfm/nostalgia_1-20-3880-0.html" title="Nostalgia">Nostalgia</a></strong></p>                                   
                            </td>
                        
                    </tr>
                </tbody>

                <tbody>
                        <tr>   
                                <td>
                                    <strong>Domenica</strong>
                                </td>
                            
                                <td>                                
                                                <p><span>15.00</span> 
                                                <strong><a href="/dreamlight/index.cfm/top-gun-maverick_1-20-3877-0.html" title="Top Gun - Maverick">Top Gun - Maverick</a></strong></p>
                                        
                                                <p><span>17.30</span> 
                                                <strong><a href="/dreamlight/index.cfm/top-gun-maverick_1-20-3877-0.html" title="Top Gun - Maverick">Top Gun - Maverick</a></strong></p>
                                        
                                                <p><span>20.00</span> 
                                                <strong><a href="/dreamlight/index.cfm/top-gun-maverick_1-20-3877-0.html" title="Top Gun - Maverick">Top Gun - Maverick</a></strong></p>
                                        
                                                <p><span>22.30</span> 
                                                <strong><a href="/dreamlight/index.cfm/top-gun-maverick_1-20-3877-0.html" title="Top Gun - Maverick">Top Gun - Maverick</a></strong></p>                                       
                                </td>
                            
                                <td>                                
                                                <p><span>15.00</span> 
                                                <strong><a href="/dreamlight/index.cfm/doctor-strange-nel-multiverso-della-follia_1-20-3872-0.html" title="Doctor Strange nel Multiverso della Follia">Doctor Strange nel Multiverso della Follia</a></strong></p>
                                        
                                                <p><span>17.30</span> 
                                                <strong><a href="/dreamlight/index.cfm/doctor-strange-nel-multiverso-della-follia_1-20-3872-0.html" title="Doctor Strange nel Multiverso della Follia">Doctor Strange nel Multiverso della Follia</a></strong></p>
                                        
                                                <p><span>20.00</span> 
                                                <strong><a href="/dreamlight/index.cfm/doctor-strange-nel-multiverso-della-follia_1-20-3872-0.html" title="Doctor Strange nel Multiverso della Follia">Doctor Strange nel Multiverso della Follia</a></strong></p>
                                        
                                                <p><span>22.30</span> 
                                                <strong><a href="/dreamlight/index.cfm/doctor-strange-nel-multiverso-della-follia_1-20-3872-0.html" title="Doctor Strange nel Multiverso della Follia">Doctor Strange nel Multiverso della Follia</a></strong></p>                                       
                                </td>
                            
                                <td>                                
                                                <p><span>15.00</span> 
                                                <strong><a href="/dreamlight/index.cfm/nostalgia_1-20-3880-0.html" title="Nostalgia">Nostalgia</a></strong></p>
                                        
                                                <p><span>17.30</span> 
                                                <strong><a href="/dreamlight/index.cfm/nostalgia_1-20-3880-0.html" title="Nostalgia">Nostalgia</a></strong></p>
                                        
                                                <p><span>20.00</span> 
                                                <strong><a href="/dreamlight/index.cfm/nostalgia_1-20-3880-0.html" title="Nostalgia">Nostalgia</a></strong></p>
                                        
                                                <p><span>22.30</span> 
                                                <strong><a href="/dreamlight/index.cfm/nostalgia_1-20-3880-0.html" title="Nostalgia">Nostalgia</a></strong></p>                                        
                                </td>
                            
                        </tr>
                </tbody>

                <tbody>
                        <tr>                            
                            <td>
                                <strong>Lunedì</strong>
                            </td>
                            
                            <td>                                
                                <p><span>15.00</span> 
                                    <strong><a href="/dreamlight/index.cfm/top-gun-maverick_1-20-3877-0.html" title="Top Gun - Maverick">Top Gun - Maverick</a></strong></p>                                       
                                <p><span>17.30</span> 
                                    <strong><a href="/dreamlight/index.cfm/top-gun-maverick_1-20-3877-0.html" title="Top Gun - Maverick">Top Gun - Maverick</a></strong></p>   
                                    <p><span>20.00</span> 
                                    <strong><a href="/dreamlight/index.cfm/top-gun-maverick_1-20-3877-0.html" title="Top Gun - Maverick">Top Gun - Maverick</a></strong></p>
                                        
                                    <p><span>22.30</span> 
                                    <strong><a href="/dreamlight/index.cfm/top-gun-maverick_1-20-3877-0.html" title="Top Gun - Maverick">Top Gun - Maverick</a></strong></p>                                
                                </td>
                            
                                <td>                               
                                    <p><span>15.00</span> 
                                    <strong><a href="/dreamlight/index.cfm/doctor-strange-nel-multiverso-della-follia_1-20-3872-0.html" title="Doctor Strange nel Multiverso della Follia">Doctor Strange nel Multiverso della Follia</a></strong></p>
                                        
                                    <p><span>17.30</span> 
                                    <strong><a href="/dreamlight/index.cfm/doctor-strange-nel-multiverso-della-follia_1-20-3872-0.html" title="Doctor Strange nel Multiverso della Follia">Doctor Strange nel Multiverso della Follia</a></strong></p>
                                        
                                    <p><span>20.00</span> 
                                    <strong><a href="/dreamlight/index.cfm/doctor-strange-nel-multiverso-della-follia_1-20-3872-0.html" title="Doctor Strange nel Multiverso della Follia">Doctor Strange nel Multiverso della Follia</a></strong></p>
                                        
                                    <p><span>22.30</span> 
                                    <strong><a href="/dreamlight/index.cfm/doctor-strange-nel-multiverso-della-follia_1-20-3872-0.html" title="Doctor Strange nel Multiverso della Follia">Doctor Strange nel Multiverso della Follia</a></strong></p>                                       
                                </td>
                            
                                <td>                               
                                    <p><span>15.00</span> 
                                    <strong><a href="/dreamlight/index.cfm/nostalgia_1-20-3880-0.html" title="Nostalgia">Nostalgia</a></strong></p>
                                        
                                    <p><span>17.30</span> 
                                    <strong><a href="/dreamlight/index.cfm/nostalgia_1-20-3880-0.html" title="Nostalgia">Nostalgia</a></strong></p>
                                        
                                    <p><span>20.00</span> 
                                    <strong><a href="/dreamlight/index.cfm/nostalgia_1-20-3880-0.html" title="Nostalgia">Nostalgia</a></strong></p>
                                        
                                    <p><span>22.30</span> 
                                    <strong><a href="/dreamlight/index.cfm/nostalgia_1-20-3880-0.html" title="Nostalgia">Nostalgia</a></strong></p>                                       
                                </td> 
                        </tr>
            </tbody> -->      
    </table>
</body>
</html>


<?php 
    include "inc/header.inc.php"
?>

    <title>Résultats des paries</title>
</head>
<body>
    <header>
        <?php include "inc/nav.inc.php"?>

        <h2 class="center">Resultats</h2>
        
        <div class="container">
            <a id="resultP" class="onglets" href="#">Resultats perso</a>
            <a id="resultC" class="onglets" href="#">Classement</a>              
        </div>

        <div class="contenu">
            <div id="perso">
                <div id="resultGardiens">
                <h2>Gardiens</h2>
                    <table>
                        <tr>
                            <th>Pronostiques</th>
                            <th>Résultats</th>
                            <th>Points gagnés</th>
                        </tr>

                        <tbody>
                            <tr>
                                <td>
                                    <ul>
                                        Tirs arrêtés : 12 <br><br>
                                        Buts encaissés : 25 <br><br>
                                        Buts marqués : 0
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        12 <br><br>
                                        25 <br><br>
                                        0
                                    </ul>
                                </td>
                                <td>+15 points</td>
                            </tr>

                            <tr>
                                <td>
                                    <ul>
                                        <li>Tirs arrêtés : 20</li>
                                        <br>
                                        <li>Buts encaissés : 20</li>
                                        <br>
                                        <li>Buts marqués : 5</li> 
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>12</li>
                                        <br>
                                        <li>27</li>
                                        <br>
                                        <li>2</li>                                        
                                    </ul>
                                </td>
                                <td>+0 point</td>
                            </tr>

                                                        
                        </tbody>
                    </table>

                </div>

                <div id="resultJoueurs">
                <h2>Joueurs</h2>
                <table>
                    <tr>
                        <th>Pronostiques</th>
                        <th>Résultats</th>
                        <th>Points gagnés</th>
                    </tr>

                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li>2 mins : 0</li>
                                    <br>
                                    <li>Carton jaune : 1</li>
                                    <br>
                                    <li>Tirs : 15</li> 
                                    <br>
                                    <li>Buts marqués : 9</li>               
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>2</li>
                                    <br>
                                    <li>1</li>
                                    <br>
                                    <li>12</li> 
                                    <br>
                                    <li>9</li>   
                                </ul>
                            </td>
                            <td>+10 points</td>
                        </tr>

                        <tr>
                            <td>
                                <ul>
                                    <li>2 mins : 2</li>
                                    <br>
                                    <li>Carton jaune : 1</li>
                                    <br>
                                    <li>Tirs : 20</li> 
                                    <br>
                                    <li>Buts marqués : 14</li>               
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>1</li>
                                    <br>
                                    <li>0</li>
                                    <br>
                                    <li>7</li> 
                                    <br>
                                    <li>3</li>   
                                </ul>
                            </td>
                            <td>+0 point</td>
                        </tr>

                        <tr>
                            <td>
                                <ul>
                                    <li>2 mins : 2</li>
                                    <br>
                                    <li>Carton jaune : 1</li>
                                    <br>
                                    <li>Tirs : 15</li> 
                                    <br>
                                    <li>Buts marqués : 9</li>               
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>2</li>
                                    <br>
                                    <li>1</li>
                                    <br>
                                    <li>15</li> 
                                    <br>
                                    <li>9</li>   
                                </ul>
                            </td>
                            <td>+20 points</td>
                        </tr>

                                                    
                    </tbody>
                </table>
                </div>
            </div>

            <div id="classement">
            <table>
                <tr>
                    <th>Blaze</th>
                    <th>Rank</th>
                </tr>

                <tbody>
                    <tr>
                        <td>Lulukaka</td>
                        <td>Rank 1</td>                        
                    </tr>
                    <tr>
                        <td>LeBGduPSG</td>
                        <td>Rank 2</td>                        
                    </tr>
                    <tr>
                        <td>LEO</td>
                        <td>Rank 3</td>                        
                    </tr>
                    <tr>
                        <td>Franklin</td>
                        <td>Rank 4</td>                        
                    </tr>
                    <tr>
                        <td>******</td>
                        <td>Rank 5</td>                        
                    </tr>
                    <tr>
                        <td>******</td>
                        <td>Rank 6</td>                        
                    </tr>
                    <tr>
                        <td>******</td>
                        <td>Rank 7</td>                        
                    </tr>
                    <tr>
                        <td>******</td>
                        <td>Rank 8</td>                        
                    </tr>
                    <tr>
                        <td>******</td>
                        <td>Rank 9</td>                        
                    </tr>

            </div>
        </div>
    </main>
</body>
<script src="js/main.js"></script>
</html>
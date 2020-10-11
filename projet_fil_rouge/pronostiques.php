<?php 
    include "inc/head.inc.php"
?>
    <title>Pronostiques de la semaine</title>
</head>
<body>
    <header>
        <?php include "inc/nav.inc.php"?>


        <section id="backG"> 
            <section id="sectionEquipe">
                <h2 class="center">Pronostiques</h2>
                <h3>Gardiens</h3> 
                <div id="gardiens" class="center">  
                    <div class="cards">
                        <img src="img/Gerard.png" alt="GÉRARD Vincent">
                        <h2 class="bleu">GERARD Vincent</h2> <br> <hr class="rouge"> <br>
                        <?php include "inc/parisGB.inc.php" ?>
                    </div> 

                    <div class="cards">
                        <img src="img/Genty.png" alt="GENTY Yann">
                        <h2 class="bleu">GENTY Yann</h2> <br> <hr class="rouge"> <br>
                        <?php include "inc/parisGB.inc.php" ?>
                    </div>                    
                </div>

                <hr>
                    <h3>Ailiers Gauche</h3>
                    <div id="ailG" class="center">
                        <div class="cards">
                            <img src="img/Keita.png" alt="KEITA Adama">
                            <h2 class="bleu">KEITA Adama</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>

                        <div class="cards">
                            <img src="img/Nahi.png" alt="NAHI Dylan">
                            <h2 class="bleu">NAHI Dylan</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>

                        <div class="cards">
                            <img src="img/Grebille.png" alt="GREBILLE Mathieu">
                            <h2 class="bleu">GREBILLE Mathieu</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>
                    </div>

                    <hr>

                    <h3>Arrières Gauche</h3>
                    <div id="arrG" class="center">
                        <div class="cards">
                            <img src="img/Hansen.png" alt="HANSEN Mikkel">
                            <h2 class="bleu">HANSEN Mikkel</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>

                        <div class="cards">
                            <img src="img/Prandi.png" alt="PRANDI Elhoim">
                            <h2 class="bleu">PRANDI Elhoim</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>
                    </div>

                    <hr>

                    <h3>Demis-centre</h3>
                    <div id="demi" class="center">
                        <div class="cards">
                            <img src="img/KarabaticN.png" alt="KARABATIC Nikola">
                            <h2 class="bleu">KARABATIC Nikola</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>

                        <div class="cards">
                            <img src="img/Ntanzi.png" alt="NTANZI Sadou">
                            <h2 class="bleu">NTANZI Sadou</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>
                    </div>

                    <hr>

                    <h3>Pivots</h3>
                    <div id="pivot" class="center">
                        <div class="cards">
                            <img src="img/Karabatic.png" alt="KARABATIC Luca">
                            <h2 class="bleu">KARABATIC Luca</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>
                        
                        <div class="cards">
                            <img src="img/Morros.png" alt="MORROS Viran">
                            <h2 class="bleu">MORROS Viran</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>

                        <div class="cards">
                            <img src="img/Syprzak.png" alt="SYPRZAK Kamil">
                            <h2 class="bleu">SYPRZAK Kamil</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>
                        
                        <div class="cards">
                            <img src="img/Toft-hansen.png" alt="TOFT HANSEN Henrik">
                            <h2 class="bleu">TOFT HANSEN Henrik</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>
                    </div>

                    <hr>

                    <h3>Arrières droit</h3>
                    <div id="arrD" class="center">
                        <div class="cards">
                            <img src="img/Kristopans.png" alt="KRISTOPANS Dainis">
                            <h2 class="bleu">KRISTOPANS Dainis</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>

                        <div class="cards">
                            <img src="img/Remili.png" alt="REMILI Nedim">
                            <h2 class="bleu">REMILI Nedim</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>
                    </div>

                    <hr>

                    <h3>Ailiers droit</h3>
                    <div id="ailD" class="center">
                        <div class="cards">
                            <img src="img/Kounkoud.png" alt="KOUNKOUD Benoît">
                            <h2 class="bleu">KOUNKOUD Benoit</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>

                        <div class="cards">
                            <img src="img/Sole.png" alt="SOLE Ferran">
                            <h2 class="bleu">SOLE Ferran</h2> <br> <hr class="rouge"> <br>
                            <?php include "inc/parisJ.inc.php" ?>
                        </div>
                    </div>  
                <button id="validerProno">Valider mes pronostiques !</button>    
            </section>
        </section>
                
    </main>

<?php include "inc/footer.inc.php" ?>
    
</body>

</html>
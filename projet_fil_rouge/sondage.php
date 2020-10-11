<?php 
    include "inc/head.inc.php"
?>

    <title>Page du PSG Handball</title>
</head>
<body>
    <header>
        <?php include "inc/nav.inc.php"?>

        <h2 class="center">Accueil</h2>
        <div id="conteneur">
            <div id="formPlayer">
                <form action="" method="POST" class="paris">
                    <label id="pseudo" for="" class="center">Entrez votre pseudo</label>
                    <input id="inputPseudo" type="text"> 
                    <button id="submitPseudo" type="button">Valider</button>
                </form>
            </div>            

            <div id="sondage">
                <h2 id="pseudoPlayer">Soit le bienvenu </h2>
                <form action="" id="q1">

                </form>
            </div>
        </div>
        
    </main>

<?php include "inc/footer.inc.php" ?>
</body>
<script src="js/main.js"></script>
</html>
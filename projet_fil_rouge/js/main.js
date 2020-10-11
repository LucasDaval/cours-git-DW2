// var ongletP = document.getElementById("resultP");
// var ongletC = document.getElementById("resultC");

// ongletP.addEventListener('click', () => {  
//     document.querySelector("#classement").style.opacity = 0;
//     document.querySelector("#perso").style.opacity = 1;
// });

// ongletC.addEventListener('click', () => {  
//     document.querySelector("#classement").style.opacity = 1;
//     document.querySelector("#perso").style.opacity = 0;
// });






/*----------------------------------------------------------------------------------------------------------------------------*/
/*---------------------------------------------------------- Page Sondage ----------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------------*/

var submitPseudoPlayer = document.getElementById("submitPseudo");
var inputPseudoPlayer = document.getElementById("inputPseudo");
var pseudoPlayer = document.getElementById("pseudoPlayer");



submitPseudoPlayer.addEventListener('click', () => {  
    document.getElementById("formPlayer").style.display = "none";
    document.getElementById("sondage").style.display = "block";
    pseudoPlayer.innerHTML += inputPseudoPlayer.value;
    quizzGame(quizz);
});

class Sondage{
    questions;
    answers;
    constructor (questions, answers) {
        this.questions = questions;
        this.answers = answers;
    }
}

const questions = [
    "En quelle année a été fondé le club ?",
    "Combien de ligue des champions a remporté le PSG ?",
    "Quelle légende est passée par le club ?",
    "Quelle star de l'USAM Nîmes est arrivée au PSG Handball durant l'été 2020 ?",
    "Quel était son surnom ?",
]

class Answers{
    choice;
    isRight;
    score;
    constructor (choice, isRight) {
        this.choice = choice;
        this.isRight = isRight;
    }
}


const quizz = [
    new Sondage(questions[0],
        (
            new Answers("1941","ok"),
            new Answers("1971","ko"),
            new Answers("2001","ko")
        )
    ), 
    new Sondage(questions[1],
        (
            new Answers(

            ),
            new Answers(

            ),
            new Answers(

            )
        )
    ),
    new Sondage(questions[2],
        (
            new Answers(

            ),
            new Answers(

            ),
            new Answers(

            )
        )
    ),
    new Sondage(questions[3],
        (
            new Answers(

            ),
            new Answers(

            ),
            new Answers(

            )
        )
    ),
    new Sondage(questions[4],
        (
            new Answers(

            ),
            new Answers(

            ),
            new Answers(

            )
        )
    )
];


console.log(quizz);

function quizzGame(sondage){
    let i = 0
    sondage.forEach(quest => {

        var q = document.createElement("h3");        
        q.innerHTML = quest.questions;

        var bvn = document.querySelector("#pseudoPlayer");
        
        var newDiv = bvn.parentNode.insertBefore(q, sondage.nextSibling);
        i++;

        sondage.forEach(quest =>{
            var r = document.createElement("a");        
            r.innerHTML = quest.answers;
            document.newDiv.appendChild(r);

            // Element.onclick = function verifRep(Element){
            //     if(Element.isRight == "ok"){
            //         Element.score++;
            //     }
            // }
        });        
    });
}

var ongletP = document.getElementById("resultP");
var ongletC = document.getElementById("resultC");

ongletP.addEventListener('click', () => {  
    document.querySelector("#classement").style.opacity = 0;
    document.querySelector("#perso").style.opacity = 1;
});

ongletC.addEventListener('click', () => {  
    document.querySelector("#classement").style.opacity = 1;
    document.querySelector("#perso").style.opacity = 0;
});
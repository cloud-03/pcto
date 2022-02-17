var prodotto = document.getElementById("prodotto");
var chiSiamo = document.getElementById("chiSiamo");
var partner = document.getElementById("partner");
var software = document.getElementById("software");
var logo = document.getElementById("logo");

prodotto.addEventListener("click", event => fProdotto());
chiSiamo.addEventListener("click", event => fChiSiamo());
partner.addEventListener("click", event => fPartner()); 
software.addEventListener("click", event => fSoftware());
logo.addEventListener("click", event => fLogo());


function fProdotto(){
    var h1 = document.getElementsByTagName("h1")[0];
    h1.innerHTML = "Prodotto";
    console.log("entrata");

    var img = document.querySelector(".start");
    img.style.backgroundImage = "url(src/img/cpu.jfif)";
}

function fChiSiamo(){
    var h1 = document.getElementsByTagName("h1")[0];
    h1.innerHTML = "Chi siamo";

    var img = document.querySelector(".start");
    img.style.backgroundImage = "url(src/img/cpu.jfif)"; 
}

function fPartner(){
    var h1 = document.getElementsByTagName("h1")[0];
    h1.innerHTML = "Partner";

    var img = document.querySelector(".start");
    img.style.backgroundImage = "url(src/img/cpu.jfif)"; 
}

function fSoftware(){
    var h1 = document.getElementsByTagName("h1")[0];
    h1.innerHTML = "Software";
    h1.style.color = "#ffffff";

    var img = document.querySelector(".start");
    img.style.backgroundImage = "url(src/img/program.png)"; 
}

function fLogo(){
    var h1 = document.getElementsByTagName("h1")[0];
    h1.innerHTML = "WELCOME to the future";

    var img = document.querySelector(".start");
    img.style.backgroundImage = "url(src/img/tree.jpg)"; 
}

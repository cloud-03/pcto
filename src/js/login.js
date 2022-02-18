var entra = document.getElementById("login");
var close = document.getElementById("close");

entra.addEventListener("click", event => login());
close.addEventListener("click", event => home());

function login(){
    var popup = document.getElementsByClassName("login")[0];
    popup.style.display = "block";

    var head = document.getElementsByTagName("head")[0];
    var css = document.createElement('link');
    css.rel = "stylesheet";
    css.href = "src/css/login.css";
    css.type = "text/css"
    head.appendChild(css);
}

function home(){
    var del = document.getElementsByTagName("link")[1];
    del.remove();
}

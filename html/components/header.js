function AbrirMenu() {
    if (document.querySelector('.menu-mobile').style.display != "none") {
        document.querySelector('.menu-mobile').style.display = "none"; //menu fechado
        document.querySelector('.mobile').style.marginTop = '0px';
        document.querySelector('.icon').style.transform = "rotate(0deg)"; //menu fechado
    } else {
        document.querySelector('.icon').style.transform = "rotate(90deg)"; //menu fechado
        document.querySelector('.menu-mobile').style.display = "flex"; //menu fechado
        document.querySelector('.mobile').style.marginTop = '300px';
    }
}

const url = window.location.href;
let actualMenu = "";
const regexMask = ".*\/(.*)\/(.*)\.|html|php^";

if (url.match(regexMask)[1] == "html") actualMenu = url.match(regexMask)[2];
else actualMenu = url.match(regexMask)[1];


/*Através da url atribui a classe de estilização de menu selecionado*/
console.log(actualMenu);
// document.getElementById(`${actualMenu}`).classList.add("selecionado");


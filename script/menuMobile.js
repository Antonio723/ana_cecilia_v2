
function AbrirMenu() {
  if (document.querySelector(".menu-mobile").style.display != "none") {
    document.querySelector(".menu-mobile").style.display = "none"; //menu fechado
    document.querySelector(".mobile").style.marginTop = "0px";
    document.querySelector(".icon").style.transform = "rotate(0deg)"; //menu fechado
  } else {
    document.querySelector(".icon").style.transform = "rotate(90deg)"; //menu fechado
    document.querySelector(".menu-mobile").style.display = "flex"; //menu fechado
    document.querySelector(".mobile").style.marginTop = "300px";
  }
}
AbrirMenu();

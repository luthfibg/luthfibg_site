let guys = document.getElementById("sayhiguys");
let text = document.getElementById("text");
let computer = document.getElementById("computer");

window.addEventListener("scroll", () => {
    let value = window.scrollY;
    guys.style.left = value * 3 + "px";
    text.style.top = value * 2 + "px";
});

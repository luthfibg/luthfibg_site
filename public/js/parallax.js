let guys = document.getElementById("sayhiguys");
let mobile = document.getElementById("mobile");
let computer = document.getElementById("computer");

window.addEventListener("scroll", () => {
    let value = window.scrollY;
    guys.style.left = value * 2 + "px";
});

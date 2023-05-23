// const { functions } = require("lodash");

window.onload = function () {
    const sidebar = document.querySelector(".sidebar");
    const closeBtn = document.querySelector("#btn");
    const searchBtn = document.querySelector(".fa-magnifying-glass");

    closeBtn.addEventListener("click", function () {
        sidebar.classList.toggle("open");
        menuBtnChange();
    });

    searchBtn.addEventListener("click", function () {
        sidebar.classList.toggle("open");
    });

    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("fa-bars", "fa-chevron-left");
        } else {
            closeBtn.classList.replace("fa-chevron-left", "fa-bars");
        }
    }
};

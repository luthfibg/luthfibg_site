// window.onload = function () {
//     var span = document.createElement("span");

//     span.className = "fas";
//     span.style.display = "none";
//     document.body.insertBefore(span, document.body.firstChild);

//     alert(window.getComputedStyle(span, null).getPropertyValue("font-family"));

//     document.body.removeChild(span);
// };
// ======================= menu navbar icon fold ============================

let menuIcon = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar-c");

menuIcon.onclick = () => {
    menuIcon.classList.toggle("fa-xmark");
    navbar.classList.toggle("active");
};

// ============================= sticky navbar ===========================

let sections = document.querySelectorAll("section");
let navLinks = document.querySelectorAll("header nav a");

window.onscroll = () => {
    sections.forEach((sec) => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute("id");

        if (top >= offset && top < offset + height) {
            navLinks.forEach((links) => {
                links.classList.remove("active");
                document
                    .querySelector("header nav a[href*=" + id + "]")
                    .classList.add("active");
            });
        }
    });

    let header = document.querySelector(".header");

    header.classList.toggle("sticky", window.scrollY > 100);

    // ======================= remove icon navbar when scroll ============================
    menuIcon.classList.remove("fa-xmark");
    navbar.classList.remove("active");
};

// ======================= remove icon navbar when scroll ============================

let darkModeIcon = document.querySelector("#darkMode-icon");

darkModeIcon.onclick = () => {
    darkModeIcon.classList.toggle("fa-moon");
    document.body.classList.toggle("light-mode");
};

// ======================= scroll reveal ============================
ScrollReveal({
    reset: true,
    distance: "60px",
    duration: 2500,
    delay: 200,
});

ScrollReveal().reveal(
    ".home-content, .heading, .title-subtitle, .short-desc, .about-h3, .about-p",
    {
        origin: "top",
    }
);
ScrollReveal().reveal(
    ".home-img, img, .service-container, .portfolio-box, .testimonial-wrapper, .contact form, .card",
    {
        origin: "bottom",
    }
);

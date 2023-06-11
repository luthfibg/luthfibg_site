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
    progressLine();
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
    let progress = document.querySelector(".progress-container");

    header.classList.toggle("sticky", window.scrollY > 100);
    progress.classList.toggle("indicated", window.scrollY > 100);

    // ======================= remove icon navbar when scroll ============================
    menuIcon.classList.remove("fa-xmark");
    navbar.classList.remove("active");
};

// ======================= theme switcher ============================

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
    ".home-img, img.avatar, .service-container, .portfolio-box, .testimonial-wrapper, .contact form, .card, .edu-row, .skills-row",
    {
        origin: "bottom",
    }
);

// ======================= scroll indicator ============================

function progressLine() {
    var winScroll =
        document.body.scrollTop || document.documentElement.scrollTop;
    var height =
        document.documentElement.scrollHeight -
        document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("line-progress").style.width = scrolled + "%";
}

// ======================= bootstrap tooltip initializer ============================

// const tooltipTriggerList = document.querySelectorAll(
//     '[data-bs-toggle="tooltip"]'
// );
// const tooltipList = [...tooltipTriggerList].map(
//     (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
// );

// ======================= input range progressed colorize ============================

const range = document.getElementById("efflevel");
const min = range.min;
const max = range.max;
const value = range.value;

range.style.background = `linear-gradient(to right, var(--cerulean) 0%, var(--cerulean) ${
    ((value - min) / (max - min)) * 100
}%, var(--bright-gray) ${
    ((value - min) / (max - min)) * 100
}%, var(--bright-gray) 100%)`;

range.oninput = function () {
    this.style.background = `linear-gradient(to right, var(--cerulean) 0%, var(--cerulean) ${
        ((this.value - this.min) / (this.max - this.min)) * 100
    }%, var(--bright-gray) ${
        ((this.value - this.min) / (this.max - this.min)) * 100
    }%, var(--bright-gray) 100%)`;
};

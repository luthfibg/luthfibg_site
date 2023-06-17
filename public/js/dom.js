//+++++++++++++++++++++++++++++++++++++++++++++++++++++ sidebar

const logoContainer = document.querySelector("#logoC");

// element1: Logo
const mainLogo = document.createElement("i");
mainLogo.setAttribute("class", "fa-brands fa-keycdn icon");

// element2: Logo
const logoName = document.createElement("div");
const logoNameContent = document.createTextNode("Lunatika");
logoName.appendChild(logoNameContent);
logoName.setAttribute("class", "logo-name");

// element3: Logo
const dynamicBar = document.createElement("i");
dynamicBar.setAttribute("class", "fa-solid fa-bars");
dynamicBar.setAttribute("id", "btn");

const newChild = [mainLogo, logoName, dynamicBar];
for (let i = 0; i < newChild.length; i++) {
    logoContainer.appendChild(newChild[i]);
}

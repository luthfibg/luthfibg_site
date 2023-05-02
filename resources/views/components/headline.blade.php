<section class="home d-flex align-items-start justify-content-between" id="main">
    <div class="home-content d-flex justify-content-center flex-column">
        <div class="title-subtitle d-flex flex-column justify-content-center align-items-start">
            <h3>Halo, Saya</h3>
            <h1>Muhamad Luthfi</h1>
        </div>
        <p class="short-desc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, neque.
        </p>
        <div class="social-medias">
            <a href="" data-tooltip-target="tooltip-f">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="" data-tooltip-target="tooltip-ig">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="" data-tooltip-target="tooltip-yt">
                <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="" data-tooltip-target="tooltip-git">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="" data-tooltip-target="tooltip-lin">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <div id="tooltip-f" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Facebook
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <div id="tooltip-ig" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Instagram
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <div id="tooltip-yt" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                YouTube
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <div id="tooltip-git" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Github
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <div id="tooltip-lin" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Linkedin
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
        <a href="http://" class="btn mt-3" data-tooltip-target="tooltip-dark">
            <i class="fa-solid fa-file-arrow-down"></i> CV</a>
        <div id="tooltip-dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Download CV
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
    <div style="position:fixed;top: -5rem;">
        <h1>Test</h1>
    </div>

    <div class="profession-container">
        <div class="profession-box d-flex justify-content-center align-items-center p-1">
            <div class="profession" style="--i:0;">
                <i class="fa-solid fa-code"></i>
                <h3>Web Developer</h3>
            </div>
            <div class="profession" style="--i:1;">
                <i class="fa-solid fa-terminal"></i>
                <h3>Mobile Developer</h3>
            </div>
            <div class="profession" style="--i:2;">
                <i class="fa-solid fa-microchip"></i>
                <h3>IoT&nbsp;Engineer</h3>
            </div>
            <div class="profession" style="--i:3;">
                <i class="fa-regular fa-image"></i>
                <h3>Content Creator</h3>
            </div>

            <div class="circle"></div>
        </div>
        <div class="overlay"></div>
    </div>
    <div class="home-image">
        <img src="{{ asset('assets/photos/my_img_cr.png') }}" class="avatar" alt="my-img">
    </div>
</section>
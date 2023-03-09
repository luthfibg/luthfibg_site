  {{-- <nav class="navbar is-transparent section nav-section position-fixed z-100 w-100 px-5 d-flex justify-content-between align-items-center">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
        <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
      </a>
      <div class="navbar-burger" data-target="navbarExampleTransparentExample">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  
    <div id="navbarExampleTransparentExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="https://bulma.io/" target="_blank">
          Home
        </a>
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link" href="https://bulma.io/documentation/overview/start/">
            Docs
          </a>
          <div class="navbar-dropdown is-boxed">
            <a class="navbar-item" href="https://bulma.io/documentation/overview/start/">
              Overview
            </a>
            <a class="navbar-item" href="https://bulma.io/documentation/overview/modifiers/">
              Modifiers
            </a>
            <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
              Columns
            </a>
            <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
              Layout
            </a>
            <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
              Form
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
              Elements
            </a>
            <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
              Components
            </a>
          </div>
        </div>
      </div>
  
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="field is-grouped">
            <p class="control">
              <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="https://bulma.io" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=https://bulma.io&amp;via=jgthms">
                <span class="icon">
                  <i class="fab fa-twitter"></i>
                </span>
                <span>
                  Tweet
                </span>
              </a>
            </p>
            <p class="control">
              <a class="button is-primary" href="https://github.com/jgthms/bulma/releases/download/0.9.4/bulma-0.9.4.zip">
                <span class="icon">
                  <i class="fas fa-download"></i>
                </span>
                <span>Download</span>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </nav> --}}

{{-- <a href="#" class="logo">Portfolio</a>
  <nav class="navbar">
    <a href="#home" class="nav-item">home</a>
    <a href="#about" class="">about</a>
    <a href="#services" class="">services</a>
    <a href="#portfolio" class="">portfolio</a>
    <a href="#contacts" class="">contacts</a>
</nav> --}}
<div class="navbar navbar-expand-md bg-transparent nav-section d-flex">
  <nav class="navbar navbar-expand-md bg-transparent w-100 nav-section px-0 d-flex justify-content-between align-items-center">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="#">
        Portfolio.
        {{-- <img src="{{ asset('assets/images/logos/lunatika.png') }}" alt="logo" srcset="" style="width: 3rem;height:3rem;"> --}}
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">{{ __('Home') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">{{ __('About') }}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ __('Service') }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">{{ __('Action') }}</a></li>
              <li><a class="dropdown-item" href="#">{{ __('Another action') }}</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">{{ __('Something else here') }}</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link">{{ __('Portfolio') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">{{ __('Contact') }}</a>
          </li>
        </ul>
        <a href="#" class="g-info py-1 px-2 ms-auto d-flex align-items-center justify-content-between me-3" style="background-color: transparent;border-radius: 50px;color: var(--cerulean);text-decoration:none;">
          <div class="icon-user px-2 py-1" style="border: 0.08rem solid var(--cerulean);border-radius:50%;">
            <i class="fa-regular fa-user fa-sm"></i>
          </div>
          <span class="guest-name ms-2" style="font-size: 0.8rem">{{ __('Guest') }}</span>
        </a>
        <div class="fa-regular fa-moon" id="darkMode-icon"></div>
      </div>
    </div>
  </nav>
</div>
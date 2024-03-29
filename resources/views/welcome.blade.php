<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lunatika</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

        {{-- Fontawesome Kit --}}
        <script src="https://kit.fontawesome.com/028e1f77dd.js" crossorigin="anonymous"></script>

        {{-- CSS Reference --}}
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/cover.css') }}">

        {{-- Three JS CDN --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.144.0/three.min.js" integrity="sha512-a+99cBAt+ou5bThiz5wJeuvXSrZVqZctMU5L8MWaLEc3PB+DPWMK3UycRong0zWYyhavY8HT0YyB/jtJD1S/yQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <body class="antialiased">
        <div class="se-pre-con"></div>

        @if (session('status'))
            <div class="alert alert-info text-center">
                <b>{{ session('status') }}</b>
            </div>
        @endif
        @include('components.alert')

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" style= "flex-direction: column;background-color: #1A202C;">

            {{-- Main Title --}}
            <a class="title" href="https://oxigen.web.id/" target="_blank">
                <h3 class="text-center" style="color: var(--cerulean);">{{ __('Welcome Guest !') }}</h3>
            </a>

            {{-- Canvas Platform --}}
            <canvas class="sketch"></canvas>

            {{-- Bottom Navigation --}}
            <nav class="navbar d-flex justify-content-center align-self-center">
                <i class="fa-regular fa-circle-question fa-xl" style="color: var(--cerulean) !important;" data-bs-toggle="modal" data-bs-target="#gIdentifierModal"></i>
            </nav>

            {{-- Modal --}}
            <div class="modal fade" tabindex="-1" id="gIdentifierModal">
                <div class="modal-dialog">
                  <div class="modal-content" style="background: none;">
                    <div class="modal-body" style="color: var(--light);background-color: var(--vulcan);border-radius:0.5rem;border: none;">
                        <div class="container form-guest">
                            <h5 class="mt-1">{{ __('Identifier') }}</h5>
                            <form action="{{ route('guests.store', ['guest' => 'Jonathan']) }}" method="POST" class="d-flex flex-wrap flex-column text-center mb-3 needs-validation" id="navbarNav" novalidate>
                                @csrf
                                <div class="form-floating mb-3 input-name">
                                    <input type="text" name="guest_name" class="form-control is-invalid is-guest" id="floatingInput" style="background-color: var(--bright-gray); color:var(--ghost);" placeholder="Guest Name" autocomplete="off">
                                    <label for="floatingInput" style="color: var(--gray-chateau);">{{ __('Guest Name') }}</label>
                                    <div class="invalid-feedback">
                                        {{ __('Please provide your name') }}
                                    </div>
                                </div>
                                @include('components.errors')
                                <div class="form-floating">
                                    <button type="submit" name="guest_submit" class="btn btn-outline-primary w-100" style="border: 0.03rem solid var(--cerulean); color: var(--cerulean);">{{ __('Start To Explore') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>

            <div class="new-icon">
                {{-- <a href="{{ route('new') }}">
                    <i class="fa-solid fa-circle-chevron-left" style="color: #00bfff;"></i>
                </a> --}}
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
            {{-- <script src="{{ asset('js/three.min.js') }}"></script> --}}
            {{-- <script src="{{ asset('js/cube3d.js') }}"></script> --}}
            <script type="module">

                /*** import modules ***/
                import * as THREE from "../js/three.module.js";
                import { OrbitControls } from "../js/OrbitControls.js";
                import * as dat from "./js/dat.gui.module.js";
                import gsap from "./js/gsap-core.js";
                // import { svelte } from '@sveltejs/vite-plugin-svelte';
                
                // import images from "./assets/images/Albedo_512.jpg";

                /*** test availability ***/
                // console.log(dat);
                // console.log(OrbitControls);

                /*** enable gui debug ***/
                const gui = new dat.GUI({ closed: true, width: 250 });
                const params = {
                    color: "#1e90ff", //#1e90ff
                    spinner: () => {
                        gsap.to(cube.rotation, { duration: 1, y: cube.rotation.y + 15 });
                    },
                };

                /*** set canvas ***/
                var canvas = document.querySelector(".sketch");
                var scene = new THREE.Scene();
                scene.background = new THREE.Color("#1A202C");

                /*** set lighting ***/
                // const ambientLight = new THREE.AmbientLight(0xffffff, 1);
                // scene.add(ambientLight);

                // const directionalLight = new THREE.DirectionalLight(0xffffff, 0.5);
                // directionalLight.position.set(1, 0.75, 0.25);
                // scene.add(directionalLight);

                const light = new THREE.PointLight(0xffffff, 1.5, 20, 2);
                light.position.set(0.50, 1.25, 2);
                const ambientLight = new THREE.AmbientLight(0xffffff, 0.2);
                scene.add(light, ambientLight);

                /*** set materials ***/
                var geometry = new THREE.BoxGeometry(1, 1, 1);
                var material = new THREE.MeshPhongMaterial({ color: params.color });
                var cube = new THREE.Mesh(geometry, material);
                scene.add(cube);

                /*** gui debug implements ***/
                gui.add(cube.position,"x").min(-3).max(3).step(0.01);
                gui.add(cube.position,"y").min(-3).max(3).step(0.01);
                gui.add(cube.position,"z").min(-3).max(3).step(0.01);
                gui.addColor(params, "color").onChange(() => {
                    material.color.set(params.color);
                });
                gui.add(cube, "visible");
                gui.add(cube.material, "wireframe");
                gui.add(params, "spinner");

                /*** set canvas size ***/
                var sizes = {
                    width: 400,
                    height: 400,
                };

                const aspectRatio = sizes.width / sizes.height;

                /*** set camera ***/
                const camera = new THREE.PerspectiveCamera(45, sizes.width/sizes.height, 1, 1000);
                // var camera = new THREE.OrthographicCamera(
                //     -1 * aspectRatio,
                //     1 * aspectRatio,
                //     1,
                //     -1,
                //     0.1,
                //     1000
                // );

                camera.position.z = 2;
                camera.position.x = 2;
                camera.position.y = 2;
                camera.lookAt(cube.position);
                scene.add(camera);

                /*** enable cursor controls ***/
                const controls = new OrbitControls(camera, canvas);
                controls.enableDumping = true;

                /*** render ***/
                var renderer = new THREE.WebGLRenderer({
                    canvas: canvas,
                });
                renderer.setSize(sizes.width, sizes.height);

                /*** implement animation ***/
                var clock = new THREE.Clock();                
                const animate = () => {
                    var elapsedTime = clock.getElapsedTime();
                    elapsedTime *= 0.3;
                    renderer.render(scene, camera);

                    // cube.rotation.x = elapsedTime;
                    cube.rotation.y = elapsedTime;
                    cube.rotation.z = elapsedTime;

                    controls.update();

                    window.requestAnimationFrame(animate);
                };

                animate();
            </script>

        </div>

        <script src="{{ asset('js/input_validate.js') }}"></script>
    </body>
</html>

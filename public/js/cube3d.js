import * as THREE from "three.min.js";
import { OrbitControls } from "OrbitControls.js";
// console.log(OrbitControls);
var canvas = document.querySelector(".sketch");
var scene = new THREE.Scene();
scene.background = new THREE.Color("#1A202C");

// material
var geometry = new THREE.BoxGeometry(1, 1, 1);
var material = new THREE.MeshBasicMaterial({ color: "#1e90ff" });
var cube = new THREE.Mesh(geometry, material);
scene.add(cube);

var sizes = {
    width: 500,
    height: 400,
};

const aspectRatio = sizes.width / sizes.height;
var camera = new THREE.OrthographicCamera(
    -1 * aspectRatio,
    1 * aspectRatio,
    1,
    -1,
    0.1,
    1000
);

camera.position.z = 2;
camera.position.x = 2;
camera.position.y = 2;
camera.lookAt(cube.position);
scene.add(camera);

const controls = new OrbitControls(camera, canvas);

var renderer = new THREE.WebGLRenderer({
    canvas: canvas,
});

renderer.setSize(sizes.width, sizes.height);

var clock = new THREE.Clock();

const animate = () => {
    const elapsedTime = clock.getElapsedTime();
    renderer.render(scene, camera);

    // cube.rotation.x = elapsedTime;
    // cube.rotation.y = elapsedTime;
    cube.rotation.z = elapsedTime;

    window.requestAnimationFrame(animate);
};

animate();

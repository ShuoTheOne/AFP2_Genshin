import * as THREE from '../node_modules/three/build/three.module';

console.log(THREE);

//Canvas
const canvas = document.querySelector('.webgl');

// Sizes
const sizes = {
    width: canvas.scrollWidth,
    height: canvas.scrollHeight
}

//Scene
const scene = new THREE.Scene();
scene.background = new THREE.Color( 0x934875 );
scene.add( new THREE.AmbientLight( 0x999999 ) );

//Red cube
const geometry = new THREE.BoxGeometry(1, 1, 1);
const material = new THREE.MeshBasicMaterial({color: 'red'});
const mesh = new THREE.Mesh(geometry, material);
scene.add(mesh);

//Camera
const camera = new THREE.PerspectiveCamera(75, sizes.width/sizes.height);
camera.position.z = 3;
camera.add( new THREE.PointLight( 0xffffff, 0.8 ) );
scene.add(camera);

//Renderer
const renderer = new THREE.WebGLRenderer({
    canvas: canvas
});
renderer.setSize(sizes.width, sizes.height);

renderer.render(scene, camera);



const tick = () =>
{
    mesh.rotation.y += 0.01;
    mesh.rotation.x += 0.01;

    console.log('tick');

    renderer.render(scene, camera);

    requestAnimationFrame(tick);
}

tick();
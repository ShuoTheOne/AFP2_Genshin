import * as THREE from '../node_modules/three/build/three.module';
import { OrbitControls } from '../node_modules/three/examples/jsm/controls/OrbitControls.js'
import { GUI } from '../node_modules/three/examples/jsm/libs/dat.gui.module.js';
import {GLTFLoader} from '../node_modules/three/examples/jsm/loaders/GLTFLoader.js'

/**
 * Debug
 */
const gui = new GUI()

//Canvas
const canvas = document.querySelector('.webgl');

// Sizes
const sizes = {
    width: canvas.scrollWidth,
    height: canvas.scrollHeight
}

//Scene
const scene = new THREE.Scene();
scene.background = new THREE.Color( '#66ffd9' );
scene.add( new THREE.AmbientLight( 0xffffff ) );

/**
 * Textures
 */
const textureLoader = new THREE.TextureLoader()
const matcapTexture = textureLoader.load('./public/matcap/4.png')

/**
 * Fonts
 */
const fontLoader = new THREE.FontLoader()
fontLoader.load(
    './public/fonts/helvetiker_regular.typeface.json',
    (font) => {
        const textGeometry = new THREE.TextGeometry(
            'FullExtras furdokacsa',
            {
                font: font,
                size: 0.75,
                height: 0.2,
                curveSegments: 5,
                bevelEnabled: true,
                bevelThickness: 0.03,
                bevelSize: 0.02,
                bevelOffset: 0,
                bevelSegments: 4
            }
        )
        textGeometry.computeBoundingBox()
        console.log(textGeometry.boundingBox)
        textGeometry.center()

        const material = new THREE.MeshMatcapMaterial({matcap: matcapTexture})
        //textMaterial.wireframe = true
        const text = new THREE.Mesh(textGeometry, material)
        scene.add(text)
        console.log('font loaded')
    }
)


//Red cube
const geometry = new THREE.BoxGeometry(1, 1, 1);
const material = new THREE.MeshBasicMaterial({color: 'red'});
const mesh = new THREE.Mesh(geometry, material);
scene.add(mesh);

mesh.position.x = 0.8
mesh.position.z = 2.2

gui.add(mesh.position, 'x').name('Mesh position x').min(0).max(3).step(0.1)
gui.add(mesh.position, 'z').name('Mesh position z').min(0).max(3).step(0.1)

/**
 * Camera
 **/
const camera = new THREE.PerspectiveCamera(75, sizes.width/sizes.height);
camera.position.z = 2.7;
camera.position.x = -3.4
camera.rotation.y = - 0.54
camera.add( new THREE.PointLight( 0xffffff, 0.8 ) );
scene.add(camera);

gui.add(camera.position, 'x').name('Camera position x')
gui.add(camera.position, 'z').name('Camera position z')
gui.add(camera.rotation, 'y').name('Camera rotation y')

//Renderer
const renderer = new THREE.WebGLRenderer({
    canvas: canvas
});
renderer.setSize(sizes.width, sizes.height);

renderer.render(scene, camera);



const tick = () =>
{
    mesh.rotation.y += 0.01;
   // mesh.rotation.x += 0.01;

    //console.log('tick');

    renderer.render(scene, camera);

    requestAnimationFrame(tick);
}

tick();
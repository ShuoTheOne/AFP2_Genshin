import * as THREE from '../node_modules/three/build/three.module';
import { OrbitControls } from '../node_modules/three/examples/jsm/controls/OrbitControls.js'
import { GUI } from '../node_modules/three/examples/jsm/libs/dat.gui.module.js';
import {GLTFLoader} from '../node_modules/three/examples/jsm/loaders/GLTFLoader.js'

/**
 * Debug
 */
const gui = new GUI()
gui.hide()

//Canvas
const canvas = document.querySelector('.webgl2');

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
 * Lights
 */
// Directional light
const directionalLight = new THREE.DirectionalLight(0x438424, 0.206)
directionalLight.position.set(2, 2, - 1)
gui.add(directionalLight, 'intensity').min(0).max(1).step(0.001)
gui.add(directionalLight.position, 'x').min(- 5).max(5).step(0.001)
gui.add(directionalLight.position, 'y').min(- 5).max(5).step(0.001)
gui.add(directionalLight.position, 'z').min(- 5).max(5).step(0.001)
scene.add(directionalLight)

directionalLight.castShadow = true
console.log(directionalLight.shadow)
directionalLight.shadow.mapSize.width = 1024
directionalLight.shadow.mapSize.height = 1024
directionalLight.shadow.camera.top = 2
directionalLight.shadow.camera.bottom = -2
directionalLight.shadow.camera.left = -2
directionalLight.shadow.camera.right = 2
directionalLight.shadow.camera.near = 1
directionalLight.shadow.camera.far = 5
directionalLight.shadow.radius = 10

const directionalLightCameraHelper = new THREE.CameraHelper(directionalLight.shadow.camera)
directionalLightCameraHelper.visible = false
scene.add(directionalLightCameraHelper)

/**
 * Models
 */
let model = null
const gltfLoader = new GLTFLoader()
gltfLoader.load(
    './public/models/FlightHelmet/glTF/FlightHelmet.gltf',
    (gltf) => {
        console.log(gltf)
        /*for(const child of gltf.scene.children){
            scene.add(child)
        }*/
        /*while(gltf.scene.children.length){
            scene.add(gltf.scene.children[0])
        }*/

        const child = gltf.scene
        child.scale.set(4, 4, 4)
        child.position.set(0.7, -1.3, 2.1)
        child.rotation.y = 3.5
        child.castShadow = true
        scene.add(child)

        gui.add(child.position, 'x').min(0).max(3).step(0.1).name('Model position x')
        gui.add(child.position, 'y').min(-2).max(3).step(0.1).name('Model position y')
        gui.add(child.position, 'z').min(0).max(3).step(0.1).name('Model position z')
        
        gui.add(child.rotation, 'y').name('Model rotation y').min(0).max(6).step(0.1)

        gui.add(child.scale, 'x')
        gui.add(child.scale, 'y')
        gui.add(child.scale, 'z')

        model = child
    },
    () => {
        console.log('progress')
    }/*,
    () => {
        console.log('error')
    }*/
)

/**
 * Fonts
 */
const fontLoader = new THREE.FontLoader()
fontLoader.load(
    './public/fonts/helvetiker_regular.typeface.json',
    (font) => {
        const textGeometry = new THREE.TextGeometry(
            'Ultimate Flight Helmet',
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

/*
//Red cube
const geometry = new THREE.BoxGeometry(1, 1, 1);
const material = new THREE.MeshBasicMaterial({color: 'red'});
const mesh = new THREE.Mesh(geometry, material);
scene.add(mesh);

mesh.position.x = 0.8
mesh.position.z = 2.2

gui.add(mesh.position, 'x').name('Mesh position x').min(0).max(3).step(0.1)
gui.add(mesh.position, 'z').name('Mesh position z').min(0).max(3).step(0.1)*/

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

/**
 * Renderer
 */
const renderer = new THREE.WebGLRenderer({
    canvas: canvas
});
renderer.setSize(sizes.width, sizes.height);

renderer.render(scene, camera);

/**
 * Controls
 */
/*const controls = new OrbitControls(camera, canvas)
controls.enabled = false

gui.add(controls, 'enabled')*/

/**
 * Animate
 */
const tick = () =>
{
    //mesh.rotation.y += 0.01;
    if(model !== null)
        {model.rotation.y += 0.01;}
   // mesh.rotation.x += 0.01;

    //console.log('tick');

    renderer.render(scene, camera);

    requestAnimationFrame(tick);
}

tick();
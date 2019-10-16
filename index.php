<html>
	<head>
		<title>My first three.js app</title>
		<style>
			body { margin: 0; }
			canvas { width: 100%; height: 100% }

			#info {
				position: absolute;
				top: 10px;
				width: 100%;
				text-align: center;
				z-index: 100;
				display:block;
			}
		</style>
	</head>
	<body>
		<script src="js/three.js"></script>
		<script>
			var scene = new THREE.Scene();

			// add a camera, the black background is a result of this. it is where you position the camera to be.
			// THREE.PerspectiveCamera(fov, aspect, near, far)
			var camera = new THREE.PerspectiveCamera(75, window.innerWidth/window.innerHeight, 0.1, 1000);

			// place the camera at z of 100
			camera.position.z = 100;

			// add a renderer
			var renderer = new THREE.WebGLRenderer();
			renderer.setSize( window.innerWidth, window.innerHeight );
			// add the renderer element to the DOM so it is in our page
			document.body.appendChild( renderer.domElement );

			// create some geometry - this is how you create some square 
			// geometry using the BoxGeometry method
			var geometry = new THREE.BoxGeometry( 20, 20, 20);
			// create a material
			var material = new THREE.MeshNormalMaterial();
			// add the geometry to the mesh - and apply the material to it
			var cube = new THREE.Mesh( geometry, material );
			scene.add( cube );

			/* we need to add a light so we can see our cube - its almost
			as if we're turning on a lightbulb within the room */
			var light = new THREE.PointLight(0xFFFF00);
			/* position the light so it shines on the cube (x, y, z) */
			light.position.set(10, 0, 25);
			scene.add(light);

			//basically renders the cube in the website
			var render = function () {
			requestAnimationFrame( render );

			cube.rotation.x += 0.1;
			cube.rotation.y += 0.1;
			camera.updateProjectionMatrix();

			renderer.render(scene, camera);
			};

			render();


			// var camera, scene, renderer;
			// var geometry, material, mesh;
			
			// init();
			// animate();
			
			// function init() {
			
			// 	camera = new THREE.PerspectiveCamera( 70, window.innerWidth / window.innerHeight, 0.01, 10 );
			// 	camera.position.z = 1;
			
			// 	scene = new THREE.Scene();
			
			// 	geometry = new THREE.BoxGeometry( 0.2, 0.2, 0.2 );
			// 	material = new THREE.MeshNormalMaterial();
			
			// 	mesh = new THREE.Mesh( geometry, material );
			// 	scene.add( mesh );
			
			// 	renderer = new THREE.WebGLRenderer( { antialias: true } );
			// 	renderer.setSize( window.innerWidth, window.innerHeight );
			// 	document.body.appendChild( renderer.domElement );
			
			// }
			
			// function animate() {
			
			// 	requestAnimationFrame( animate );
			
			// 	mesh.rotation.x += 0.01;
			// 	mesh.rotation.y += 0.02;
			
			// 	renderer.render( scene, camera );
			
			// }
		</script>

		<div id="info">Description</div>
	</body>
</html>
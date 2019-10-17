<html>
    <head>
        <title>Fucking Hell</title>
        <style>
        	body { 
            margin: 0; 
            width: 100%;
            height: 100%;
            overflow: hidden;
          }

          canvas { 
            width: 100%; 
            height: 100%;
          }
        </style>
    </head>

    <body>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/three.js/r73/three.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/dat-gui/0.5.1/dat.gui.min.js"></script>
      <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/OrbitControls.js"></script>
    	<script>
        var scene = new THREE.Scene();
        var camera = new THREE.PerspectiveCamera( 60, window.innerWidth/window.innerHeight, 0.1, 1000 );
        // mouse controls
        // var controls = new THREE.OrbitControls( camera );
        // controls.autoRotate = true;

        //makes the background lighting white
        var renderer = new THREE.WebGLRenderer({alpha: true}); //{alpha: true} is to make the background lighting white
        renderer.setSize( window.innerWidth, window.innerHeight );
        document.body.appendChild( renderer.domElement );

        // add cube
        var color = new THREE.Color( "#7833aa" );
        var material = new THREE.MeshLambertMaterial( {color: color.getHex(), wireframe: true}); //this is to apply the color defined, above on obj. wireframe is used to show the skeleton of a shape.
        var geometry = new THREE.OctahedronGeometry( 20 );
        var mesh = new THREE.Mesh( geometry, material );
        scene.add( mesh );

        camera.position.z = 100;

        //this is the lighting position
        // so many lights
        var light = new THREE.DirectionalLight( 0xffffff, 1 );
        light.position.set( 0, 1, 0 );
        scene.add( light );

        var light = new THREE.DirectionalLight( 0xffffff, 0.5 );
        light.position.set( 0, -1, 0 );
        scene.add( light );

        var light = new THREE.DirectionalLight( 0xffffff, 1 );
        light.position.set( 1, 0, 0 );
        scene.add( light );

        var light = new THREE.DirectionalLight( 0xffffff, 0.5 );
        light.position.set( 0, 0, 1 );
        scene.add( light );

        var light = new THREE.DirectionalLight( 0xffffff, 1 );
        light.position.set( 0, 0, -1 );
        scene.add( light );

        var light = new THREE.DirectionalLight( 0xffffff, 0.5 );
        light.position.set( -1, 0, 0 );
        scene.add( light );

        var render = function () {
          requestAnimationFrame( render );
          mesh.rotation.x += 0.01;
          mesh.rotation.y += 0.01;
          renderer.render(scene, camera);
        };

        render();
    	</script>
    </body>
</html>
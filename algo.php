<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
    <script src="three.js"></script>

</head>

<body>
<!--Canvas-Escenario de trabajo-->
<script>
 //Render WEBGL   
 const renderer = new THREE.WebGLRenderer();
 renderer.setSize(window.innerWidth, window.innerHeight);
 document.body.appendChild(renderer.domElement);
 //No se cambia
 const camera = new THREE.PerspectiveCamera(70, window.innerWidth/window.innerHeight,1,400);
 camera.position.set(0,0,20);
 const scene = new THREE.Scene();//Grafo de escena
 //Son los que poco cambian

 //elementos graficos->primitivas
 //esferas, cubos, piramides
//malla, textura= mesh
 var geometria=new THREE.BoxGeometry(1,1,1);
 var material=new THREE.MeshNormalMaterial();
 var objetocubo=new THREE.Mesh(geometria, material);
 var radio1=5;

 var geometria1=new THREE.SphereGeometry(2,32,32);
 var material1=new THREE.MeshNormalMaterial();
 var esfera=new THREE.Mesh(geometria1, material1);

 scene.add(objetocubo);
 scene.add(esfera);

 //esfera.position.x= esfera.position.x+5;
 //x=rcos(a) y y=rsen(a) 

 renderer.render(scene,camera);
    var a1=0;
  var animar=function(){
     a1=a1+0.01;
      esfera.position.x=radio1*Math.cos(a1);
      esfera.position.z=radio1*Math.sin(a1);
      objetocubo.rotation.x+=0.01;//transform group
      esfera.rotation.x+=0.01;//transform group
      renderer.render(scene,camera);
      requestAnimationFrame(animar);//ejectutar un funcion a 60fps//setup
      
  }

  animar();

  var mouse = new THREE.Vector2();

function onMouseDown( event ) {
	mouse.x = ( event.clientX / window.innerWidth ) * 2 - 1;
	mouse.y = - ( event.clientY / window.innerHeight ) * 2 + 1;

}
</script>



</body>
</html>
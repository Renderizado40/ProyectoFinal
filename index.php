<!DOCTYPE html>
<html>
<head>
	<title>MovieRama</title>
	<style type="text/css">
		body{
			margin: 0;
		}
		#top{
			background-color: black;
			width: 100%;
			height: 50px;
			display: inline-block;
			float: left;
		}
		#peliculas{
			width: 100%;
			height: 800px;
			background-color: blue;
			float: left;
		}
		#fotter{
			width: 100%;
			height: 250px;
			background-color: gray;
			float: left;
		}
		#top_container{
			width: 80%;
			height: 100%;
			float: left;
			margin-left: 10%;
			background-color: red;
			display: inline-block;
		}
		#peliculas_container{
			width: 80%;
			height: 90%;
			float: left;
			margin-left: 10%;
			margin-top: 2%;
			background-color: green;
			display: inline-block;
		}
		#peliculas_container h3{
			color: white;
			margin: 3px 3px 3px 3px;
			font-family: sans-serif;
			font-size: 1.5em;
			float: left;
		}
		#peliculas_portadas{
			width: 100%;
			height: 50%;
			margin-top: 2%;
			float: left;
			background-color: red;
			display: inline-block;
		}
		#portada_img{
			width: 15%;
			height: 90%;
			float: left;
			background-color: violet;
			margin: 0.825%;
		}
		#copy_box{
			width: 50%;
			height: 100%;
			background-color: green;
			margin-left: 25%;

		}
	</style>
</head>
<body>
	<!-- content -->
	<div>
		<!-- TOP -->
		<div id="top">
			<div id="top_container">
				
			</div>
		</div>
		<!-- PELICULAS -->
		<div id="peliculas">
			<div id="peliculas_container">
				<h3>
					Sugerencias
				</h3>
				<div id="peliculas_portadas">
					<!-- AQUI APARECERAN LAS PELICULAS COMO UN CARRUSEL -->
					<div id="portada_img">
						
					</div>
					<div id="portada_img">
						
					</div>
					<div id="portada_img">
						
					</div>
					<div id="portada_img">
						
					</div>
					<div id="portada_img">
						
					</div>
					<div id="portada_img">
						
					</div>
				</div>
			</div>
		</div>
		<!-- FOTTER -->
		<div id="fotter">
			<div id="copy_box">
				
			</div>
		</div>
	</div>
</body>
</html>
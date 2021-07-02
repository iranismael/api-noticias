<!DOCTYPE html>
<html lang="es">
<head>
	<title>Noticias</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Iran Ismael Ramirez Flores">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="description" content="Blog de Noticias Ismael Flores">

    <!-- CSS only -->
   	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   	<!--Fuentes Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&display=swap" rel="stylesheet">

    <!-- Estilos página-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>
	<div class="header">
		<h2>Noticias</h2>
	</div>

	<div class="container">
	  	<div class="row pagination__list" id="pagination-1">
	  		<?php require "api-news.php" ?>
	    </div>
	</div>

	<div class="footer">
		<p>Desarrollado por <a target="_blank" href="http://ismaelfloresdev.com">Ismael Ramirez Flores</a></p>
	</div>

	<!-----Scripts----->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jQuery.paginate.js"></script>

	<!--Paginar los resultados-->
	<script type="text/javascript">

		$('#pagination-1').paginate({
		        	items_per_page: 10
		});
	
	</script>
	
	<!-- Obtener los Users Ramdom-->
	<script type="text/javascript">
		var url = 'https://randomuser.me/api/'
		$(document).ready(function() {
		    $.ajax({
			    method : 'GET',
			    url : url,
			    dataType : 'json'
			  	})
			  	.done(mohit)
			  	.fail(function(){
			    console.log('failed')
		  });

		  function mohit(data){
		    	var info = data.results[0];
			 $(".autor").text(info.name.first+ " " + data.results[0].name.last);
		 }

		 });
	</script>

</body>
</html>

<?php 
	
	/*Obtener e imprimir las noticias de la API*/
	$json = file_get_contents('https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=e440508ebf5e45e48106a579bc39c5ff');
	
	$news = json_decode($json, true);
	$autor = "ismael";
	
	foreach ($news["articles"] as $i => $article) {

		echo '
			<div class="col-md-4 pagination__item">
				<div class="card">
		    	  <img class="card-img-top" src="'.$article['urlToImage'].'" alt="">
		    	  <div class="card-body">
		    	  	<div class="badge">Autor: <span class="autor">'.$autor.'</span></div>
		    	    <h5 class="card-title">'.limitar_cadena($article['title'],60,'...').'</h5>
		    	    
		    	    <a target="_blank" href="'.$article['url'].'" class="btn btn-outline-secondary btn-card ">Leer más</a>
		    	  </div>
		    	</div>
		    </div>
		';
	}

	/*---Funcion limitar cadena---*/
	function limitar_cadena($cadena, $limite, $sufijo){
		
		// Si la longitud es mayor que el límite...
		if(strlen($cadena) > $limite){
			// Entonces corta la cadena y ponle el sufijo
			return substr($cadena, 0, $limite) . $sufijo;
		}
		// Si no, entonces devuelve la cadena normal
		return $cadena;
	}

 ?>

 

<html>
  <body>
  <?php
  
		$bd  = new PDO( "pgsql:host=localhost;dbname=vod", "adminvod" , "azerty" ) ;
	 
		$sql = "select * from Film 
			where titre = $_POST['titre']";  
		$resultat = $bd->query( $sql ) ;
	 
		$recherche = $select->fetch(PDO::FETCH_OBJ);
        echo "La recherche pour le film ".$_POST["titre"]." n'a pas aboutie";
    }

  ?>
  </body>
</html>

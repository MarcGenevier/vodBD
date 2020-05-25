<html>
  <body>
  <?php
  
			$bd  = new PDO( "mysql:host=localhost;dbname=vod", "adminvod" , "azerty" ) ;
			
			$sql = "DELETE from Film
					WHERE titre = $_POST['titre']" ;  
			$resultat = $bd->exec( $sql );

	      echo "Le film ".$titre." a été supprimé avec succès";
        break;
      }
    }

  ?>
  </body>
</html>

<html>
    <body>
    <?php
		 
		 if(isset($_POST['submit'])){
			$bd  = new PDO( "pgsql:host=localhost;dbname=vod", "adminvod" , "azerty" );
			$sql = "insert into Film ($_POST['numFilm'],$_POST['titre'],$_POST['année'],$_POST['realisateur'])";
			$result = $bd->exec( $sql );
			
			 echo "Le film a été ajouté avec succés ".$_POST["titre"].":".$_POST["annee"].":".$_POST["realisateur"];
	      }
    ?> 
    </body>
</html>

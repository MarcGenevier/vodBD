<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../style/vod.css" />
  </head>
  <body>
      <table>
          <thead>
              <tr>
                  <td>Titre</td>
                  <td>Année</td>
                  <td>Réalisateur</td>
              </tr>
          </thead>
          <tbody>
            <?php
            
           $bd  = new PDO( "mysql:host=localhost;dbname=vod", "adminvod" , "azerty" ) ;
           $sql = "select * from Film" ;
           while( $uneLigne = $resultat->fetch() ) {    echo $uneLigne[ 0 ] ;  }
           $resultat = $bd->query( $sql ) ;
           
            ?>
                <tr>
                    <td><?php echo $titre ?></td>
                    <td><?php echo $annee ?></td>
                    <td><?php echo $realisateur ?></td>
                </tr>
            <?php
            }
            ?>
          </tbody>
      </table>
  </body>
</html>

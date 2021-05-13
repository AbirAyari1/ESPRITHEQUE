	                                  


     <?php

    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'asma';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
     $q = $conn->query(
     "SELECT titre, matiere FROM cours
      WHERE titre LIKE '%$recherche%'
      OR matiere LIKE '%$recherche%'
      LIMIT 10");

       
                   while( $row= mysqli_fetch_array($q)) 
                   {       ?>

                            <div class="card-body">
                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th>matiere</th>
                                        <th>titre</th>

                                    </tr>
                                <tbody>

                                    <tr>

                                        <td><?php echo $row['matiere']; ?></td>
                                        <td><?php echo $row['titre']; ?></td>

                                    </tr>
                                </tbody>
                            </table>
                            }
                  

     

<?php
/**
 * PDO - Exemple SELECT
 *
 * @author Frederic Lefevre <fred.lefevre@gmail.com>
 */

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'bobby');
define('DB_PASSWORD', 'hello');
define('DB_NAME', 'blog');
define('DB_DSN', 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port=3306;charset=UTF8');

$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
$sql = "SELECT id, nom, email FROM blog.utilisateur";
// Exécution de la requête de sélection
$resultat = $dbh->query($sql);
$les_utilisateurs = $resultat->fetchAll(PDO::FETCH_ASSOC);

echo 'Affichage des utilisateurs un par un <br>';
foreach ($les_utilisateurs as $un_utilisateur) {
    echo $un_utilisateur['id'] . ' - ';
    echo $un_utilisateur['nom'] . ' - ';
    echo $un_utilisateur['email'];
    echo '<br>';
}

echo 'Contenu de la variable $les_utilisateurs <br>';
echo '<pre>';
print_r($les_utilisateurs);
echo '</pre>';

$dbh = null;
?>
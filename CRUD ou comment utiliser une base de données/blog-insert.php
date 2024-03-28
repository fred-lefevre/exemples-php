<?php
/**
 * PDO - Exemple INSERT
 *
 * @author Frederic Lefevre <fred.lefevre@gmail.com>
 */

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'bobby');
define('DB_PASSWORD', 'hello');
define('DB_NAME', 'blog');
define('DB_DSN', 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port=3306;charset=UTF8');

$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
$sql = "INSERT INTO blog.utilisateur (nom, email) VALUES ('Karl','carl@example.com')";
// Exécution de la requête d'insertion
$resultat = $dbh->query($sql);

echo 'Ajout réussi d\'un Karl <br>';

$dbh = null;
?>
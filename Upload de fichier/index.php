<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Téléverser</title>
    </head>
    <body>
        <h1>Quelle photo ?</h1>
        <form action="resultat.php" method="post" enctype="multipart/form-data">
            <!-- Taille maximale exprimée en octets -->
            <!-- 512 Ko = 512 * 1024 = 524288 -->
            <input type="hidden" name="MAX_FILE_SIZE" value="524288" />
            <label for="photo">Fichier contenant une photo :</label>
            <input type="file" id="photo" name="ficphoto" accept="image/jpeg" required />
            <br />
            <br />
            <input type="submit" value="Téléverser la photo" />
        </form>
        <hr />
        <p><a href="voir.php">Voir la photo</a></p>
    </body>
</html>
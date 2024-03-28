
-- Connexion  avec :
-- mysql -u root -p

-- CRéation du compte bobby utilisable depuis localhost uniquement
CREATE USER 'bobby'@'localhost'
    IDENTIFIED BY 'hello';

-- bobby peut tout faire sur la BD blog
GRANT ALL ON blog.*
    TO 'bobby'@'localhost';

-- SUppression de la BD blog si et seulement si elle existe
DROP DATABASE IF EXISTS blog;

-- Création de la base de données blog
CREATE DATABASE blog
    DEFAULT CHARACTER SET utf8;

-- Création de la table utilisateur
CREATE TABLE blog.utilisateur (
    id INT AUTO_INCREMENT,
    nom VARCHAR(100),
    email VARCHAR(100),
    PRIMARY KEY(id)
) ENGINE InnoDB DEFAULT CHARSET=utf8;

-- Ajout de quatre utilisateurs
INSERT INTO blog.utilisateur (nom, email) VALUES
    ('Tara', 'tara@example.com'),
    ('Ada', 'ada@example.com'),
    ('Erikson', 'erik@example.com'),
    ('Jorg', 'jorg@example.com');
    
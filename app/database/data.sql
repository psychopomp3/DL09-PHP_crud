CREATE TABLE IF NOT EXISTS post (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom VARCHAR(255),
    email VARCHAR(255),
    titre VARCHAR(500),
    commentaire TEXT,
    competence VARCHAR(255),
    niveau VARCHAR(255),
    createAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO post (nom, email, titre, commentaire, competence, niveau)
VALUES
('jon doe', 'jjo@yahoo.uk', 'un titre pour jojj', 'There are a number of mailing lists devoted to', 'python, html', 'expert'),
('jane doe', 'jaja@yahoo.uk', 'titre de jane', 'There are a number of mailing lists devoted to', 'php, html', 'intermediaire');
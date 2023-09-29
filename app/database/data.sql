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
('John Doe', 'jojo@yahoo.uk', 'un titre pour jojj', 'There are a number of mailing lists devoted to', 'python, html', 'expert'),
('Jane Doe', 'jaja@yahoo.uk', 'titre de jane', 'Un texte trop trop bien wesh', 'php, html', 'intermediaire'),
('Valerie-Dami Doe', 'vd.doe@yahoo.uk', 'titre de Valoche', 'Un tiens vaut mieux la peau de lours', 'php, html', 'intermediaire');
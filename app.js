const express = require('express');
const app = express();
const mysql = require('mysql');

const connection = mysql.createConnection({
    host: 'main.leskientz.ovh.',
    user: 'projet_web',
    password: 'pastis67',
    database: 'projet_web'
});

connection.connect((err) => {
    if (err) throw err;
    console.log('Connecté à la base de données MySQL !');
    app.get('/pays', (req, res) => {
        connection.query('SELECT * FROM pays', (err, resultats) => {
          if (err) throw err;
          res.send(resultats);
        });
      });
});
  
app.listen(3000, () => {
    console.log('Serveur démarré sur le port 3000');
    }
);

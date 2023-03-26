const express = require('express');
const app = express();
const mysql = require('mysql');

const connection = mysql.createConnection({
    host: 'main.leskientz.ovh.',
    user: 'projet_web',
    password: 'pastis67',
    database: 'projet_web'
});

connection.connect()

function getPays(callback) {
    connection.query('SELECT nom_pays FROM pays', (error, results) => {
        if (error) {
            callback(error, null);
        } else {
            const pays = results.map(result => result.nom_pays);
            callback(null, pays);
        }
    });
}
  
  module.exports = {
    getPays: getPays
  };

app.listen(3000, () => {
    console.log('Server started on port 3000')
});
const express = require('express');
const mysql = require('mysql');

const app = express();

const connection = mysql.createConnection({
  host: 'mysql-container',
  user: 'root',
  password: 'jaythree',
  database: 'outfit_db',
  insecureAuth: true
});

connection.connect();

app.get('/products', function(req, res) {
  connection.query('SELECT * FROM products', function (error, results) {

    if (error) { 
      throw error
    };

    res.send(results.map(item => ({ product: item.product, unit_price: item.unit_price })));
  });
});

app.listen(9001, '0.0.0.0', function() {
  console.log('Listening on port 9001');
})